<?php

class WelcomeController extends BaseController{
    
    public function index(){
        $data=new stdClass();
        //$blocks=DB::table('blocks')->where('block_active','1')->get();
        $blocks=Block::where('block_active','1')->orderBy('block_index','asc')->get();
        //dd($blocks);
        $data->header='Welcome to';
        $data->title='Home page'; 
        return View::make('home',compact('data','blocks'));
    }
    
    public function about(){
        $data=new stdClass();
        $data->header='About';
        $data->title='About Marie';
        return View::make('about',compact('data'));
    }
    
    public function services(){
        //$services=Service::with('category');
        $data=new stdClass();
        $data->header='Services at';
        $data->title='Services page';
        //$services=Service::all();
        $services=Service::service_list();
        return View::make('services',compact('data','services'));
    }
    
    public static function contact(){
        $data=new stdClass();
        $data->header='How to contact';
        $data->title='How to contact us';
        return View::make('contact',compact('data'));
    }
    
    public function formpost(){
        $form=Input::all();
        $validation=Validator::make($form,Contact::$rules);
        
        if($validation->fails()){
            return Redirect::back()->withInput()->withErrors($validation);
        }
        
        return View::make('success');
        
        
    }
    
}