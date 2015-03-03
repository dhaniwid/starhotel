<?php

class RoomImages extends \Eloquent {
	protected $table = 'roomimages';
	protected $primaryKey = 'roomtype_id';
	protected $fillable = [];
	public $timestamps = false; 

	public function roomtype(){
		return $this->belongsTo('RoomTypes','roomtype_id', 'roomtype_id');
	}
}