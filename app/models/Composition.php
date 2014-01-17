<?php

class Composition extends Eloquent {
	protected $guarded = array();

	public static $rules = array(
		'user_id' => 'required',
		'exam_id' => 'required',
		'title' => 'required',
		'content' => 'required',
		'note' => 'required',
		'teacher_id' => 'required'
	);
}
