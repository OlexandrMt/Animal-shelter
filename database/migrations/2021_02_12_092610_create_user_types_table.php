<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateUserTypesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
		 if(!Schema::hasTable("user_types")){
			Schema::create('user_types', function (Blueprint $table) {
			  $table->tinyIncrements("id")->autoIncrement();
			  $table->unsignedTinyInteger("value")->unique();
			  $table->string("name");
        });
		 } else {
			Schema::create('user_types', function (Blueprint $table) {
			  if(!Schema::hasColumn("user_types", "id")){
				  $table->tinyIncrements("id")->autoIncrement();
			  }
			  if(!Schema::hasColumn("user_types", "value")){
				  $table->unsignedTinyInteger("value")->unique();
			  }
			  if(!Schema::hasColumn("user_types", "name")){
				  $table->string("name");
			  }
        }); 
		 }
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('user_types');
    }
}
