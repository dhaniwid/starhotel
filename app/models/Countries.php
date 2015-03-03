<?php

class Countries extends Eloquent
{
	/**
     * Model 'Booking' table
     * @var string
     */
	protected $table = 'countries';
	protected $primaryKey = 'country_id';
        
    public $timestamps = false;        
}