<?php

class RoomFeatures extends \Eloquent {
	protected $table = 'roomfeatures';
	protected $primaryKey = 'roomfeature_id';
	protected $fillable = [];
	public $timestamps = false; 

	public function roomtype(){
        return $this->belongsToMany('RoomTypes','room_contents', 'roomfeature_id', 'roomtype_id')->pivot('checked');
    }
}