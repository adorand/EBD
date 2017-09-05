<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateSlidersTable extends Migration
{
    public function up()
    {
        Schema::create('sliders', function (Blueprint $table)
        {
            $table->uuid('id');
            $table->text('nompage');
            $table->text('image');
            $table->timestamps();
            $table->primary('id');
        });
    }


    public function down()
    {
        Schema::dropIfExists('sliders');
    }
}
