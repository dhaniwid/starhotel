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
                $table->string('guest_name')->nullable();
                $table->string('email')->nullable();
                $table->string('roomtype_name')->nullable();
                $table->string('roomtype_id')->nullable();
                $table->string('duration')->nullable();
                $table->string('room_qty')->nullable();
                $table->integer('adult_qty')->nullable();
			    $table->integer('child_qty')->nullable();
			    $table->integer('infant_qty')->nullable();
                $table->string('check_in')->nullable();
                $table->string('check_out')->nullable();
                $table->string('payment_type')->nullable();
                $table->string('total')->nullable();
                $table->string('status')->nullable();

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
