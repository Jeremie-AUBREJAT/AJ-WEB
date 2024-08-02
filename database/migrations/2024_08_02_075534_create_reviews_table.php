<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateReviewsTable extends Migration
{
    public function up()
    {
        Schema::create('reviews', function (Blueprint $table) {
            $table->id();
            $table->string('name');
            $table->string('email');
            $table->text('review');
            $table->integer('rating')->unsigned(); // Note en nombre entier entre 1 et 5
            $table->boolean('approved')->default(false); // Champs pour la validation des avis
            $table->timestamps(); // Pour les champs de création et mise à jour
        });
    }

    public function down()
    {
        Schema::dropIfExists('reviews');
    }
}
