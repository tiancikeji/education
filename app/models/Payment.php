<?php

class Payment extends Eloquent {
	protected $guarded = array();

	public static $rules = array(
		'type' => 'required'
		// 'count' => 'required'
	);

}
