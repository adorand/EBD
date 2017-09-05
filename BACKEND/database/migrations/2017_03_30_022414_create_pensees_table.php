<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreatePenseesTable extends Migration
{
    public function up()
    {
        Schema::create('pensees', function (Blueprint $table)
        {
            $table->uuid('id');
            $table->date('datepassage');
            $table->text('theme');
            $table->integer('auteur')->unsigned();
            $table->text('texte');
            $table->string('image');
            $table->timestamps();
            $table->primary('id');
            $table->foreign('auteur')->references('id')->on('auteurs')->onDelete('cascade');
        });
    }

    public function down()
    {
        Schema::dropIfExists('pensees');
    }
}
