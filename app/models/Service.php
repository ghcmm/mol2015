<?php

class Service extends \Eloquent {
	
	
	protected $fillable = ['cat_id','subcat_id','service_name','price'];
	
	public static $service_rules=array(
		'service_name'=>'required',
		'price'=>'required|regex:/^\d*(\.\d{2})?$/',
		'cat_id'=>'required|regex:/^[1-9][0-9]*/',
	);
	
	public function cats(){
		
		return $this->hasOne('Category','id','cat_id');
	}
	
	public function subcats(){
		
		return $this->hasOne('Category','id','subcat_id');
	}
	
	public static function service_list(){
		$servicelist=Service::join('categories as mcats','mcats.id','=','cat_id')
		->leftjoin('categories as scats','scats.id','=','subcat_id')
		->orderBy('mcats.name','asc')
		->orderBy('scats.name','asc')
		->orderBy('price','asc')
		->select('services.*','mcats.name as main_cat','scats.name as sub_cat')
		->get();
		
		return $servicelist;
	}
	
}