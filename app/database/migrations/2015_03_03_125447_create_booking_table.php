<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateBookingTable extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		Schema::create('booking', function($table)
		{
			$table->string('booking_id');
                  $table->date('booking_date')->nullable();
                  $table->time('booking_time')->nullable();
                  $table->date('booking_arrival_plan')->nullable();
                  $table->integer('booking_night')->nullable();
                  $table->integer('booking_adult')->nullable();
                  $table->integer('booking_child')->nullable();
                  $table->integer('booking_totalroom')->nullable();
                  $table->float('booking_totalprice')->nullable();
                  $table->float('booking_fullprice')->nullable();
                  $table->string('booking_guestfirstname')->nullable();
                  $table->string('booking_guestlastname')->nullable();
                  $table->string('booking_guestnationality')->nullable();            
                  $table->string('booking_guestcountryresident')->nullable();            
                  $table->string('booking_guestphone')->nullable();            
                  $table->string('booking_cardholdername')->nullable();
                  $table->string('booking_cardnumber')->nullable();
                  $table->string('booking_cardissuer')->nullable();
                  $table->string('booking_cardcountry')->nullable();
                  $table->string('booking_cardcity')->nullable();
                  $table->text('booking_cardbillingaddress')->nullable();
                  $table->string('booking_cardpostalcode')->nullable();
                  $table->string('booking_cardphone')->nullable();
                  $table->string('booking_promotionalcode')->nullable();
                  $table->float('booking_promotionalcodeamount')->nullable();
                  $table->boolean('booking_reserve')->nullable();
                  $table->boolean('booking_guaranteed')->nullable();
                  $table->boolean('booking_approved')->nullable();
                  $table->boolean('booking_cancelled')->nullable();
                  $table->boolean('booking_expired')->nullable();

                  $table->primary(array('booking_id'));
		});
	}

	/**
	 * Reverse the migrations.
	 *
	 * @return void
	 */
	public function down()
	{
		Schema::drop('booking');
	}

}
