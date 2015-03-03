<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateRoomavailabilityTable extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		Schema::create('roomavailability', function($table)
		{
			$table->timestamp('roomavailability_id');
	        $table->date('roomavailability_date');
	        $table->string('roomtype_id');
	        $table->integer('roomavailability_number');
	        $table->boolean('roomavailability_closeout')->nullable();	
	        $table->boolean('roomavailability_noarrival')->nullable();
	        $table->boolean('roomavailability_promoblackout')->nullable();
	        $table->boolean('roomavailability_status')->nullable();
	        $table->integer('roomavailability_extrabed')->nullable();
	        $table->integer('roomavailability_maxpeople')->nullable();
	        $table->integer('roomavailability_guaranteed')->nullable();
	        $table->integer('roomavailability_reserved')->nullable();
	        $table->integer('roomavailability_minstay')->nullable();
	    });
	}

	/**
	 * Reverse the migrations.
	 *
	 * @return void
	 */
	public function down()
	{
		Schema::drop('roomavailability');
	}

}
