<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateSuperheroesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('superheroes', function (Blueprint $table) {
            $table->integer('id');
            $table->string('name');
            $table->string('fullName');
            $table->integer('strength');
            $table->integer('speed');
            $table->integer('durability');
            $table->integer('power');
            $table->integer('combat');
            $table->string('race');
            $table->string('height/0');
            $table->string('height/1');
            $table->string('weight/0');
            $table->string('weight/1');
            $table->string('eyeColor');
            $table->string('hairColor');
            $table->string('publisher');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('superheroes');
    }
}
