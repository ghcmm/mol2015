<?php

/*
|--------------------------------------------------------------------------
| Application Routes
|--------------------------------------------------------------------------
|
| Here is where you can register all of the routes for an application.
| It's a breeze. Simply tell Laravel the URIs it should respond to
| and give it the Closure to execute when that URI is requested.
|
*/


/*Route::get('/set_roles',function()
{
    $owner = new Role;
    $owner->name = 'Owner';
    $owner->save();
    
    $admin = new Role;
    $admin->name = 'Admin';
    $admin->save();
    
    return 'Setup done';
});*/

Route::group(array('prefix'=>'/'),function(){
    Route::get('/', array('as'=>'home', 'uses'=>'WelcomeController@index'));
    Route::get('index', array('as'=>'home', 'uses'=>'WelcomeController@index'));
    Route::get('about', array('as'=>'about', 'uses'=>'WelcomeController@about'));
    Route::get('services', array('as'=>'services', 'uses'=>'WelcomeController@services'));
    Route::get('contact', array('as'=>'contact', 'uses'=>'WelcomeController@contact'));
    Route::put('contact', array('as'=>'form.validation', 'uses'=>'WelcomeController@formpost'));
    Route::put('success', array('as'=>'form.success', 'uses'=>'WelcomeController@success'));
});

Route::group(array('prefix'=>'admin'),function(){
    Route::get('login',array('as'=>'admin.login','uses'=>'AdminAuthController@getLogin'));
    Route::post('login',array('as'=>'admin.login.post','uses'=>'AdminAuthController@postLogin'));
    Route::get('logout',array('as'=>'admin.logout','uses'=>'AdminAuthController@getLogout'));
    
	
    });


Route::group(array('prefix'=>'admin','before'=>'auth'),function(){
	Route::get('/', array('as'=>'admin.home', 'uses'=>'AdminAuthController@index'));
	
	Route::resource('users','AdminUsersController');
	Route::put('users/{id}/update_username',array('as'=>'admin.users.update_username','uses'=>'AdminUsersController@update_username'));
	Route::put('users/{id}/update_email',array('as'=>'admin.users.update_email','uses'=>'AdminUsersController@update_email'));
	Route::put('users/{id}/update_password',array('as'=>'admin.users.update_password','uses'=>'AdminUsersController@update_password'));
	
	Route::get('users/',array('as'=>'admin.users','uses'=>'AdminUsersController@index'));
	
	//Admin Categories Routes
	Route::resource('categories','AdminCategoriesController');
	Route::get('categories/',array('as'=>'admin.categories','uses'=>'AdminCategoriesController@index'));
	
	//Admin Services
	Route::resource('services','AdminServicesController');
	Route::get('services/',array('as'=>'admin.services','uses'=>'AdminServicesController@index'));
	Route::put('services/column_sort',array('as'=>'admin.services.column_sort','uses'=>'AdminServicesController@column-sort'));
	
	//Admin Blocks
	Route::resource('blocks','AdminBlocksController');
	Route::get('blocks/',array('as'=>'admin.blocks','uses'=>'AdminBlocksController@index'));
	Route::put('blocks/{id}/toggle_visable',array('as'=>'admin.blocks.toggle_visable','uses'=>'AdminBlocksController@toggle_visable'));
	Route::put('blocks/{id}/toggle_notice',array('as'=>'admin.blocks.toggle_notice','uses'=>'AdminBlocksController@toggle_notice'));

});


Route::get('table',function(){
    
    $services=Service::service_list();
    return View::make('table')->with('services',$services);

});
