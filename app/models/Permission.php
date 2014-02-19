<?php

class Permission extends Eloquent {
	protected $guarded = array();

	public static $rules = array(
		'url' => 'required',
		'name' => 'required',
		'parent_id' => 'required'
	);
}
