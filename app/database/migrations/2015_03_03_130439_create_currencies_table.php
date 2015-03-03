<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateCurrenciesTable extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		Schema::create('currency', function($table)
		{
			$table->increments('id');
	        $table->string('title');
	        $table->string('symbol_left');
	        $table->string('symbol_right');
	        $table->string('code');
	        $table->integer('decimal_place');
	        $table->float('value');
	        $table->string('decimal_point');
	        $table->string('thousand_point');
	        $table->integer('status');
	        $table->timestamp('created_at');
	        $table->timestamp('updated_at');
	    });
	}

	/**
	 * Reverse the migrations.
	 *
	 * @return void
	 */
	public function down()
	{
		Schema::drop('currency');
	}

}
