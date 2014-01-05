<?php

use Illuminate\Auth\UserInterface;
use Illuminate\Auth\Reminders\RemindableInterface;

class User extends Eloquent {

	protected $guarded = array();
	/**
	 * The database table used by the model.
	 *
	 * @var string
	 */
	// protected $table = 'users';

	public static $rules = array(
		'email' => 'required',
		'name' => 'required',
		'password' => 'required'
	);

	/**
	 * The attributes excluded from the model's JSON form.
	 *
	 * @var array
	 */
	// protected $hidden = array('password');

	/**
	 * Get the unique identifier for the user.
	 *
	 * @return mixed
	 */
	// public function getAuthIdentifier()
  
	// {
	// 	return $this->getKey();
	// }

	/**
	 * Get the password for the user.
	 *
	 * @return string
	 */

	// public function getAuthPassword()
	// {
	// 	return $this->password;
	// }

	/**
	 * Get the e-mail address where password reminders are sent.
	 *
	 * @return string
	 */

	// public function getReminderEmail()
	// {
	// 	return $this->email;
	// }

}
