<?php

class Contact extends \Eloquent {
	protected $fillable = [];
	
	public static $rules=array(
		'firstname'=>'required',
		'lastname'=>'required',
		'phone'=>'required',
		'email'=>'required|email',
		'message'=>'required'
	);
}