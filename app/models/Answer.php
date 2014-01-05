<?php

class Answer extends Eloquent {
	protected $guarded = array();

	public static $rules = array(
		'id' => 'required',
		'description' => 'required',
		'exercise_id' => 'required'
	);
}
