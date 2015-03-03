<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateFeaturesTable extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		Schema::create('roomfeatures', function($table)
        {
                $table->string('roomfeature_id');
                $table->string('roomfeature_name');
                $table->string('roomfeature_description')->nullable();
                $table->string('roomfeature_icon')->nullable();
                $table->string('roomfeature_mobileicon')->nullable();

                $table->primary(array('roomfeature_id'));
        });
	}

	/**
	 * Reverse the migrations.
	 *
	 * @return void
	 */
	public function down()
	{
		Schema::drop('roomfeatures');
	}

}
