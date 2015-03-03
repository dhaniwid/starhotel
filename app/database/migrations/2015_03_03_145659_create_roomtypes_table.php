<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateRoomtypesTable extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		Schema::create('roomtypes', function(Blueprint $table)
        {
            $table->string('roomtype_id');
            $table->string('roomtype_name')->nullable();
            $table->string('roomtype_description')->nullable();
            $table->integer('roomtype_size')->nullable();
            $table->integer('roomtype_maxoccupancy')->nullable();
            $table->integer('roomtype_minimumavailability')->nullable();
            $table->integer('roomtype_extrabed')->nullable();
            $table->boolean('roomtype_activestatus')->nullable();
            $table->boolean('roomtype_petallowed')->nullable();
            $table->float('roomtype_lowestprice')->nullable();
            $table->boolean('roomtype_statusdeleted')->nullable();
            $table->float('roomtype_extrabedprice')->nullable();
            $table->integer('roomtype_seq')->nullable();

            $table->primary(array('roomtype_id'));
        });
	}

	/**
	 * Reverse the migrations.
	 *
	 * @return void
	 */
	public function down()
	{
		Schema::drop('roomtypes');
	}

}
