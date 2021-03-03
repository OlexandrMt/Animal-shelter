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
			  if(!Schema::hasColumn("user_types", "id")){
				  Schema::table("user_types", function(Blueprint $table){
					 $table->tinyIncrements("id")->autoIncrement(); 
				  });
			  }
			  if(!Schema::hasColumn("user_types", "value")){
				  Schema::table("user_types", function(Blueprint $table){
					$table->unsignedTinyInteger("value")->unique();
				  });
			  }
			  if(!Schema::hasColumn("user_types", "name")){
				  Schema::table("user_types", function(Blueprint $table){
					$table->string("name");
				  });
			  }
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
