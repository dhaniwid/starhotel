<?php

class RoomContents extends \Eloquent {
	protected $table = 'room_contents';
	protected $primaryKey = 'roomtype_id';
	protected $foreignKey = 'roomfeature_id';
	protected $fillable = [];
	public $timestamps = false; 
}