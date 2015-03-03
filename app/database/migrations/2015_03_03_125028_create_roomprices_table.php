<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateRoompricesTable extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		Schema::create('roomprices', function($table)
		{
			$table->timestamp('roomprice_datetime');
            $table->date('roomprice_date');
            $table->integer('occupancy_id');
            $table->string('roomtype_id');
            $table->float('roomprice_rate');
            $table->integer('roomprice_breakfast')->nullable();
            $table->integer('roomprice_extrabed')->nullable();
            $table->boolean('roomprice_status')->nullable();
            $table->string('roomprice_day');
		});
	}

	/**
	 * Reverse the migrations.
	 *
	 * @return void
	 */
	public function down()
	{
		Schema::drop('roomprices');
	}

}
