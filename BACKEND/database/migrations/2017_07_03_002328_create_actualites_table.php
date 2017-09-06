<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateActualitesTable extends Migration
{
    public function up()
    {
        Schema::create('actualites', function (Blueprint $table)
        {
            $table->uuid('id');
            $table->string('titre');
            $table->text('texte');
            $table->text('fichier');
            $table->date('dateact');
            $table->timestamps();
            $table->primary('id');
        });
    }

    public function down()
    {
        Schema::dropIfExists('actualites');
    }
}
