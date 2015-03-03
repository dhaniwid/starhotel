<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateRoomsurchargeTable extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		Schema::create('roomsurcharge', function($table)
		{
			$table->date('rs_date');
	        $table->date('rs_datetime');
	        $table->integer('surcharge_id');
	        $table->string('roomtype_id');
	        $table->float('rs_price');	
	        $table->boolean('rs_deleted')->nullable();
	        $table->boolean('rs_optional')->nullable();
	        $table->boolean('rs_pax')->nullable();
	        $table->float('rs_netprice')->nullable();
	        $table->boolean('rs_status')->nullable();
	    });
	}

	/**
	 * Reverse the migrations.
	 *
	 * @return void
	 */
	public function down()
	{
		Schema::drop('roomsurcharge');
	}

}
