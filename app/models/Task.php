<?php

class Task extends \Eloquent {

	// Add your validation rules here
	public static $rules = [
		'title' => 'required',
		'assignedTo' => 'required',
		'initialDate' => 'required',
		'finalDate' => 'required'
	];

	// Don't forget to fill this array
	protected $fillable = ["title","description","assignedTo","duration","initialDate","finalDate","completed"];

	public function member()
  	{
      return $this->belongsTo('Member','assignedTo');
  	}

}