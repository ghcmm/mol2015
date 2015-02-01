<?php

class AdminAuthController extends BaseController
{
    public function index()
    {
        return View::make('admin.index');
    }
    
    public function getLogin(){
        return View::make('admin.auth.login');
    }
    
    public function postLogin(){
        $data=Input::all();
        $validator=Validator::make($data, User::$auth_rules);
        if ($validator->fails())
        {
                return Redirect::back()->withErrors($validator)->withInput();
        }
        if (Auth::attempt(array('username'=>Input::get('username'),'password'=>Input::get('password')))){
            //dd($data);
            return Redirect::intended('admin');
        }
        dd('ouch',$data);
        return Redirect::route('admin.login');
    }
    
    public function getLogout()
    {
        Auth::logout();
        return Redirect::route('admin.login');
    }
    
}