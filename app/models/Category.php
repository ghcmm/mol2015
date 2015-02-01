<?php

class Category extends \Eloquent {
	
	protected $table='categories';
	protected $fillable = ['name','description'];
	
	public static $cat_rules=array(
		'name'=>'required|min:3|unique:categories'
	);
	
	public function services()
	{
		return $this->belongsToMany('Service');
	}
}