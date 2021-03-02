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
			  $foreignKeys = $this->listTableForeignKeys("users");
			  if(!in_array("users_type_foreign", $foreignKeys)) {
					Schema::table("users", function(Blueprint $table){
						$table->foreign("type")
							->on("user_types")
							->onUpdate("cascade")
							->onDelete("set null")
							->references("value");		
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
        //
    }
	 
	 //Helper function
	 public function listTableForeignKeys($table){
		$conn = Schema::getConnection()->getDoctrineSchemaManager();
		return array_map(function($key){
			return $key->getName();
		}, $conn->listTableForeignKeys($table));
	}
}
