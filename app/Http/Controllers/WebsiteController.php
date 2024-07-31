<?php

namespace App\Http\Controllers;

use App\Models\Website;
use App\Models\Picture;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;

class WebsiteController extends Controller
{
    public function index()
    {
        // Récupérer tous les sites web avec leurs images associées
        $websites = Website::with('pictures')->get();
    
        // Passer les données à la vue
        return view('websites.index', compact('websites'));
    }

    // Afficher le formulaire de création du site web
    public function create()
    {
        return view('websites.create');
    }

    public function store(Request $request)
{
    // Validation des données du formulaire
    $request->validate([
        'name' => 'required|string|max:255',
        'url' => 'required|url|unique:websites',
        'owner_name' => 'required|string|max:255',
        'owner_address' => 'required|string|max:255',
        'phone_number' => 'required|string|max:20',
        'email' => 'required|email|unique:websites',
        'images.*' => 'mimes:jpg,jpeg|max:2048', // Validation pour les images JPG/JPEG
    ]);

    // Création du site web
    $website = Website::create($request->only([
        'name', 'url', 'owner_name', 'owner_address', 'phone_number', 'email'
    ]));

    // Traitement des images
    if ($request->hasFile('images')) {
        foreach ($request->file('images') as $image) {
            // Définir le chemin de destination pour l'image
            $destinationPath = public_path('images_create');

            // Assurez-vous que le répertoire existe
            if (!is_dir($destinationPath)) {
                mkdir($destinationPath, 0755, true);
            }

            // Générez un nom unique pour l'image
            $filename = time() . '_' . pathinfo($image->getClientOriginalName(), PATHINFO_FILENAME) . '.webp';
            $filePath = $destinationPath . '/' . $filename;

            // Créer une image en fonction du type
            switch ($image->extension()) {
                case 'jpeg':
                case 'jpg':
                    $sourceImage = imagecreatefromjpeg($image->getRealPath());
                    break;
                default:
                    // Si ce n'est pas JPEG/JPG, continuer à la prochaine image
                    continue 2;
            }

            // Obtenir les dimensions originales
            list($width, $height) = getimagesize($image->getRealPath());

            // Définir les dimensions de la nouvelle image
            $newWidth = 1280;
            $newHeight = 720;

            // Calculer le ratio pour conserver les proportions
            $ratio = min($newWidth / $width, $newHeight / $height);
            $resizeWidth = intval($width * $ratio);
            $resizeHeight = intval($height * $ratio);

            // Créer une nouvelle image
            $imageResized = imagecreatetruecolor($resizeWidth, $resizeHeight);

            // Redimensionner l'image
            imagecopyresampled($imageResized, $sourceImage, 0, 0, 0, 0, $resizeWidth, $resizeHeight, $width, $height);

            // Sauvegarder l'image en WebP
            imagewebp($imageResized, $filePath, 90); // Qualité de 90 pour WebP

            // Libérer la mémoire
            imagedestroy($sourceImage);
            imagedestroy($imageResized);

            // Enregistrez le chemin de l'image dans la base de données
            Picture::create([
                'website_id' => $website->id,
                'path' => 'images_create/' . $filename,
            ]);
        }
    }

    // Rediriger vers une autre page ou afficher un message de succès
    return redirect()->route('websites.index')->with('success', 'Website created successfully!');
}

//afficher la page edit pour la modification
public function edit($id)
{
    $website = Website::findOrFail($id);

    // Vous pouvez charger les images associées si vous en avez besoin dans le formulaire
    $pictures = $website->pictures;

    return view('websites.edit', compact('website', 'pictures'));
}

//Modification update d un website
public function update(Request $request, $id)
{
    // Validation des données du formulaire
    $request->validate([
        'name' => 'required|string|max:255',
        'url' => 'required|url|unique:websites,url,' . $id,
        'owner_name' => 'required|string|max:255',
        'owner_address' => 'required|string|max:255',
        'phone_number' => 'required|string|max:20',
        'email' => 'required|email|unique:websites,email,' . $id,
        'images.*' => 'mimes:jpg,jpeg|max:2048', // Validation pour les images JPG/JPEG
    ]);

    // Trouver le site web à mettre à jour
    $website = Website::findOrFail($id);

    // Mise à jour des informations du site web
    $website->update($request->only([
        'name', 'url', 'owner_name', 'owner_address', 'phone_number', 'email'
    ]));

    // Traitement des images
    if ($request->hasFile('images')) {
        // Supprimer les anciennes images
        foreach ($website->pictures as $picture) {
            $filePath = public_path($picture->path);
            if (file_exists($filePath)) {
                unlink($filePath);
            }
            $picture->delete();
        }

        // Ajouter les nouvelles images
        foreach ($request->file('images') as $image) {
            // Définir le chemin de destination pour l'image
            $destinationPath = public_path('images_create');

            // Assurez-vous que le répertoire existe
            if (!is_dir($destinationPath)) {
                mkdir($destinationPath, 0755, true);
            }

            // Générez un nom unique pour l'image
            $filename = time() . '_' . pathinfo($image->getClientOriginalName(), PATHINFO_FILENAME) . '.webp';
            $filePath = $destinationPath . '/' . $filename;

            // Créer une image en fonction du type
            switch ($image->extension()) {
                case 'jpeg':
                case 'jpg':
                    $sourceImage = imagecreatefromjpeg($image->getRealPath());
                    break;
                default:
                    continue 2;
            }

            // Obtenir les dimensions originales
            list($width, $height) = getimagesize($image->getRealPath());

            // Définir les dimensions de la nouvelle image
            $newWidth = 1280;
            $newHeight = 720;

            // Calculer le ratio pour conserver les proportions
            $ratio = min($newWidth / $width, $newHeight / $height);
            $resizeWidth = intval($width * $ratio);
            $resizeHeight = intval($height * $ratio);

            // Créer une nouvelle image
            $imageResized = imagecreatetruecolor($resizeWidth, $resizeHeight);

            // Redimensionner l'image
            imagecopyresampled($imageResized, $sourceImage, 0, 0, 0, 0, $resizeWidth, $resizeHeight, $width, $height);

            // Sauvegarder l'image en WebP
            imagewebp($imageResized, $filePath, 90);

            // Libérer la mémoire
            imagedestroy($sourceImage);
            imagedestroy($imageResized);

            // Enregistrez le chemin de l'image dans la base de données
            Picture::create([
                'website_id' => $website->id,
                'path' => 'images_create/' . $filename,
            ]);
        }
    }

    // Rediriger vers une autre page ou afficher un message de succès
    return redirect()->route('websites.index')->with('success', 'Website updated successfully!');
}

//Supprimer un website avec ses photos
public function destroy($id)
{
    // Trouver le site web par son ID
    $website = Website::findOrFail($id);

    // Supprimer les photos associées
    foreach ($website->pictures as $picture) {
        // Supprimer le fichier physique
        $filePath = public_path('images_create/' . $picture->path);
        if (file_exists($filePath)) {
            unlink($filePath);
        }

        // Supprimer l'enregistrement de la base de données
        $picture->delete();
    }

    // Supprimer le site web
    $website->delete();

    // Rediriger vers une autre page avec un message de succès
    return redirect()->route('websites.index')->with('success', 'Website and its images deleted successfully!');
}

}
