<?php

class Plan extends Eloquent {
	protected $guarded = array();

	public static $rules = array(
		'event' => 'required',
		'event_date' => 'required',
		'status' => 'required',
		'user_id' => 'required',
		'type' => 'required'
	);
}
