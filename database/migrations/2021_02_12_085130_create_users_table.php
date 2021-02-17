<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;
use Illuminate\Support\Facades\Config;

class CreateUsersTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
		 if(!Schema::hasTable("users")){
			 Schema::create('users', function (Blueprint $table) {
				$table->id();
				$table->string('username');
				$table->string('password');
				$table->string('email')->unique();
				$table->unsignedTinyInteger("type")->nullable();
				$table->boolean("active")->default(Config::get("constants.db.USER_ACTIVE"));
				$table->rememberToken();
				$table->timestamp("created_at")->useCurrent();
				$table->timestamp("updated_at")->useCurrent(); 
			 });		
		 } else {
			if(!Schema::hasColumn("users", "id")){
				$table->id();
			}
			if(!Schema::hasColumn("users", "username")){
				$table->string('username');
			}
			if(!Schema::hasColumn("users", "password")){
				$table->string('password');
			}
			if(!Schema::hasColumn("users", "email")){
				$table->string('email')->unique();
			}
			if(!Schema::hasColumn("users", "type_id")){
				$table->unsignedTinyInteger("type")->nullable();
			}
			if(!Schema::hasColumn("users", "active")){
				$table->boolean("active")->default(Config::get("constants.db.USER_ACTIVE"));
			}
			if(!Schema::hasColumn("users", "remember_token")){
				$table->rememberToken();
			}
			if(!Schema::hasColumn("users", "created_at")){
				$table->timestamp("created_at")->useCurrent();
			}
			if(!Schema::hasColumn("users", "updated_at")){
				$table->timestamp("updated_at")->useCurrent();
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
        Schema::dropIfExists('users');
    }
}
