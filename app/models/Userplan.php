<?php

class Userplan extends Eloquent {
	protected $guarded = array();

	public static $rules = array(
		'user_id' => 'required',
		'plan_id' => 'required'
	);
}
