<?php

class Report extends Eloquent {
	protected $guarded = array();

	public static $rules = array(
		'user_id' => 'required',
		'exam_id' => 'required',
		'content' => 'required',
		'teacher_id' => 'required'
	);
}
