<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateAnimalsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('animals', function (Blueprint $table) {
            $table->id();
            $table->string('name')->nullable();
            $table->string('breed')->nullable();
            $table->integer('age')->nullable();
            $table->string('type')->nullable();
            $table->string('photo')->nullable();
            $table->boolean('sex')->nullable();
            $table->boolean('status')->nullable();

            $table->foreignId('shelter_id')->constrained();

            $table->timestamps();

/*            animal nickname;
animal breed;
animal age;
animal type; (examples: cat, dog, rodent)
animal photos;
animal sex;
status free / taken away;*/
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('animals');
    }
}
