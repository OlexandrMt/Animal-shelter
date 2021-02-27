<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class SetUserTypeAsForeignKeyOnUsers extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        if(Schema::hasColumn("users", "type") && Schema::hasColumn("user_types", "value")){
			  Schema::table("users", function(Blueprint $table){
				  $table->foreign("type")
							->on("user_types")
							->onUpdate("cascade")
							->onDelete("set null")
							->references("value");		
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
        //
    }
}
