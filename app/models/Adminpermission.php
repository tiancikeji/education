<?php

class Adminpermission extends Eloquent {
	protected $guarded = array();

	public static $rules = array(
		'teacher_id' => 'required',
		'permission_id' => 'required'
	);
}
