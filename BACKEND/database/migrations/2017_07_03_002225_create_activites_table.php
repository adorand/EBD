<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateActivitesTable extends Migration
{
    public function up()
    {
        Schema::create('activites', function (Blueprint $table)
        {
            $table->uuid('id');
            $table->string('titre');
            $table->text('texte');
            $table->text('fichier');
            $table->date('dateact');
            $table->string('categorie');
            $table->timestamps();
            $table->primary('id');
        });
    }

    public function down()
    {
        Schema::dropIfExists('activites');
    }
}
