<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateRoomimagesTable extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		Schema::create('roomimages', function($table)
        {
            $table->string('roomimage_name');
            $table->string('roomtype_id');
            $table->boolean('roomimage_mobile')->nullable();
            $table->boolean('roomimage_primary')->nullable();
            $table->string('roomimage_description')->nullable();
            $table->string('slider_path')->nullable();

            $table->primary(array('roomimage_name'));
        });
	}

	/**
	 * Reverse the migrations.
	 *
	 * @return void
	 */
	public function down()
	{
		Schema::drop('roomimages');
	}

}
