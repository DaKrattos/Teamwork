<?php

class Member extends \Eloquent {

	// Add your validation rules here
	public static $rules = [
		'firstname' => 'required',
		'lastname' => 'required',
		'email' => 'required|email'
	];

	// Don't forget to fill this array
	protected $fillable = ["firstname","lastname","email"];

	public function tasks()
  	{
      return $this->hasMany('Task');
  	}
}