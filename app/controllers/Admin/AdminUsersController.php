<?php

class AdminUsersController extends \BaseController {

	/**
	 * Display a listing of the resource.
	 * GET /users
	 *
	 * @return Response
	 */
	public function index()
	{
	    $users=User::all();
	    return View::make('admin.users.index', compact('users'));
	}

	/**
	 * Show the form for creating a new resource.
	 * GET /users/create
	 *
	 * @return Response
	 */
	public function create()
	{
            return View::make('admin.users.create');
	}

	/**
	 * Store a newly created resource in storage.
	 * POST /users
	 *
	 * @return Response
	 */
	public function store()
	{
	    $input=Input::all();
	    $validation=Validator::make($input, User::$user_rules);
	    if($validation->passes())
	    {
		$input['password']=Hash::make($input['password']);
		User::create($input);
		//dd($input['password']);
		return Redirect::route('admin.users');
	    }
	    return Redirect::back()->withInput()->withErrors($validation);
	}

	/**
	 * Display the specified resource.
	 * GET /users/{id}
	 *
	 * @param  int  $id
	 * @return Response
	 */
	public function show($id)
	{
		//
	}

	/**
	 * Show the form for editing the specified resource.
	 * GET /users/{id}/edit
	 *
	 * @param  int  $id
	 * @return Response
	 */
	public function edit($id)
	{
	    $user=User::find($id);
	    return View::make('admin.users.edit', compact('user'));
	}

	/**
	 * Update the specified resource in storage.
	 * PUT /users/{id}
	 *
	 * @param  int  $id
	 * @return Response
	 */
	public function update($id)
	{
	    $input=Input::all();
	    $user=User::find($id);
	   	   
	    $validation=Validator::make($input, User::$user_edit_rules);
	    if($validation->passes())
	    {
		
		$user->update($input);
		return Redirect::route('admin.users');
	    }
	    
	    return Redirect::back()->withInput()->withErrors($validation);
	}

	/**
	 * Remove the specified resource from storage.
	 * DELETE /users/{id}
	 *
	 * @param  int  $id
	 * @return Response
	 */
	public function destroy($id)
	{
		//
	}

}