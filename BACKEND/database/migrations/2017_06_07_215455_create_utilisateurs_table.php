<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateUtilisateursTable extends Migration
{
    public function up()
    {
        Schema::create('utilisateurs', function (Blueprint $table)
        {
            $table->increments('id');
            $table->text('nomcomplet');
            $table->text('login');
            $table->text('password');
            $table->text('phone');
            $table->text('droits');
            $table->text('photo');
            $table->timestamps();
        });
    }


    public function down()
    {
        Schema::dropIfExists('utilisateurs');
    }
}
