<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateUsersTable extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		Schema::create('users', function($table)
		{
			$table->increments('id');
	        $table->string('email');
	        $table->string('password');
	        $table->text('permissions')->nullable();
	        $table->boolean('activated');
	        $table->string('activation_code')->nullable();
	        $table->timestamp('activated_at')->nullable();
	        $table->timestamp('last_login')->nullable();
	        $table->string('persist_code')->nullable();
	        $table->string('reset_password_code')->nullable();
	        $table->string('first_name')->nullable();
	        $table->string('last_name')->nullable();
	        $table->timestamp('created_at');
	        $table->timestamp('updated_at');
	        $table->string('username');
	    });
	}

	/**
	 * Reverse the migrations.
	 *
	 * @return void
	 */
	public function down()
	{
		Schema::drop('users');
	}

}
