<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateBookingHistoryTable extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		Schema::create('booking_histories', function($table)
        {
                $table->string('id');
                $table->string('guest_name');
                $table->string('email');
                $table->string('roomtype_name');
                $table->string('roomtype_id');
                $table->string('duration');
                $table->string('room_qty');
                $table->integer('adult_qty');
			    $table->integer('child_qty');
			    $table->integer('infant_qty');
                $table->string('check_in');
                $table->string('check_out');
                $table->string('payment_type');
                $table->string('total');
                $table->string('status');

                $table->primary(array('id'));
        });
	}

	/**
	 * Reverse the migrations.
	 *
	 * @return void
	 */
	public function down()
	{
		Schema::drop('booking_histories');
	}

}
