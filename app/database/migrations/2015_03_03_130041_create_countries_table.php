<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateCountriesTable extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		Schema::create('countries', function($table)
		{
			$table->char('country_id');
	        $table->string('country_name');
	        $table->string('country_name1')->nullable();
	        $table->string('country_name2')->nullable();
	        $table->string('country_shortname');
	        $table->string('country_prefix_number')->nullable();
	        $table->string('country_province_alias')->nullable();
	        $table->timestamp('country_last_update')->nullable();

	        $table->primary(array('country_id'));
	    });
	}

	/**
	 * Reverse the migrations.
	 *
	 * @return void
	 */
	public function down()
	{
		Schema::drop('countries');
	}

}
