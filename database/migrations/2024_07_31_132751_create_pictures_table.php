<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreatePicturesTable extends Migration
{
    public function up()
    {
        Schema::create('pictures', function (Blueprint $table) {
            $table->id();
            $table->foreignId('website_id')->constrained()->onDelete('cascade');
            $table->string('path'); // Chemin vers l'image
            $table->timestamps();
        });
    }

    public function down()
    {
        Schema::dropIfExists('pictures');
    }
}
