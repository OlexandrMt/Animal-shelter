<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class Users extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
      Schema::create('shelters', function (Blueprint $table) {
        $table->increments('id');

        $table->string('name', 255)->nullable();
        $table->string('address', 255)->nullable();
        $table->string('mail')->nullable();
        $table->string('phone')->nullable();
        $table->string('logo')->nullable();
        $table->boolean('status');

//        $table->integer('admin');
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
