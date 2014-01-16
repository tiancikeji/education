<?php

class Exam extends Eloquent {
	protected $guarded = array();

	public static $rules = array(
		'start_time' => 'required',
		'end_time' => 'required',
		'user_id' => 'required',
		'paper_id' => 'required',
		'answers' => 'required',
		'score' => 'required'
	);
}
