<?php

class Userteacher extends Eloquent {
	protected $guarded = array();

	public static $rules = array(
		'user_id' => 'required',
		'teacher_id' => 'required'
	);
}
