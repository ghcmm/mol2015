<?php

use Illuminate\Auth\UserTrait;
use Illuminate\Auth\UserInterface;
use Illuminate\Auth\Reminders\RemindableTrait;
use Illuminate\Auth\Reminders\RemindableInterface;
use Zizaco\Entrust\HasRole;

class User extends Eloquent implements UserInterface, RemindableInterface {

	use UserTrait, RemindableTrait;
	use HasRole;
	
	protected $fillable = ['username','email','password'];
	
	public static $auth_rules =[
		'username'=>'required',
		'password'=>'required'
	]; 
	
	public static $user_rules=array(
		'username'=>'required|min:4',
		'email'=>'required|unique:users',
		'password'=>'required:min:6'
	);
	
	public static $user_edit_rules=array(
		'username'=>'required|min:4',
		'email'=>'required|unique:users',
		'password'=>'min:6'
	);

	/**
	 * The database table used by the model.
	 *
	 * @var string
	 */
	protected $table = 'users';

	/**
	 * The attributes excluded from the model's JSON form.
	 *
	 * @var array
	 */
	protected $hidden = array('password', 'remember_token');

}
