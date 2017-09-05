<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateMessagesTable extends Migration
{

    public function up()
    {
        Schema::create('messages', function (Blueprint $table)
        {
            $table->uuid('id');
            $table->text('theme');
            $table->integer('auteur')->unsigned();
            $table->text('fichier');
            $table->primary('id');
            $table->foreign('auteur')->references('id')->on('auteurs')->onDelete('cascade');
            $table->timestamps();
        });
    }

    public function down()
    {
        Schema::dropIfExists('messages');
    }
}
