<?php

class PlanTask extends Eloquent {
	protected $guarded = array();

	public static $rules = array(
		'start_date' => 'required',
		'end_date' => 'required',
		'content' => 'required',
		'type' => 'required'
	);
}
