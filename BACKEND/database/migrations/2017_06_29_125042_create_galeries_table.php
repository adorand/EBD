<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateGaleriesTable extends Migration
{
    public function up()
    {
        Schema::create('galeries', function (Blueprint $table)
        {
            $table->uuid('id');
            $table->string('texte');
            $table->text('fichier');
            $table->integer('evenement')->unsigned();
            $table->timestamps();
            $table->primary('id');
            $table->foreign('evenement')->references('id')->on('evenements')->onDelete('cascade');
        });
    }

    public function down()
    {
        Schema::dropIfExists('galeries');
    }
}
