<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateSheltersTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up(){
        Schema::create('shelters', function (Blueprint $table) {
          $table->id();

          $table->string('name')->nullable();
          $table->string('address')->nullable();
          $table->string('mail')->nullable();
          $table->string('phone')->nullable();
          $table->string('logo')->nullable();
          $table->boolean('status');
          //$table->integer('user_id');

        //  $table->foreign('user_id')->references('id')->on('users');

          $table->foreignId('user_id')->constrained(); //same to 2 written higher lines

          $table->timestamps();
          });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('shelters');
    }
}
