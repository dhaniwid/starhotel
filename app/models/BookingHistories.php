<?php

class BookingHistories extends Illuminate\Database\Eloquent\Model {
	public $table = 'booking_histories';
	public $timestamps = false;	
	protected $fillable = ['guest_name', 'roomtype_id', 'duration', 'room_qty', 'check_in', 'check_out', 'payment_type', 'total'];
}