<?php

class AdminServicesController extends \BaseController {

    /**
     * Display a listing of the resource.
     * GET /adminservices
     *
     * @return Response
     */
    public function index()
    {
	$services=Service::service_list();
	return View::make('admin.services.list',compact('services'));
    }
    
    public function column_sort()
    {
	$services=Service::service_list();
	return View::make('admin.services.list',compact('services'));
    }
    
    public function create()
    {
	$cats_list=Category::orderBy('id')->lists('name','id');
        return View::make('admin.services.create',compact('cats_list'));
    }

    /**
     * Store a newly created resource in storage.
     * POST /adminservices
     *
     * @return Response
     */
    public function store()
    {
	$input=Input::all();
	
	$validation=Validator::make($input, Service::$service_rules);
	if($validation->passes())
	{
	    Service::create($input);
	    //dd($input);
	    return Redirect::route('admin.services');
	}
	
	return Redirect::back()->withInput()->withErrors($validation);
    }

    /**
     * Display the specified resource.
     * GET /adminservices/{id}
     *
     * @param  int  $id
     * @return Response
     */
    public function show($id)
    {
	$category=Category::find($id);
	
	return View::make('admin.services.show',compact('category'));
    }

    /**
     * Show the form for editing the specified resource.
     * GET /adminservices/{id}/edit
     *
     * @param  int  $id
     * @return Response
     */
    public function edit($id)
    {
	$cats_list=Category::orderBy('id')->lists('name','id');   
	$service=Service::find($id);
        return View::make('admin.services.edit',compact('service','cats_list'));
    }

    /**
     * Update the specified resource in storage.
     * PUT /adminservices/{id}
     *
     * @param  int  $id
     * @return Response
     */
    public function update($id)
    {
	$input=Input::all();
        
        $validation=Validator::make($input, Service::$service_rules);
        if($validation->passes())
        {
            $service=Service::find($id);
            $service->update($input);
            return Redirect::route('admin.services');
        }
        
        return Redirect::back()->withInput()->withErrors($validation);
    }

    /**
     * Remove the specified resource from storage.
     * DELETE /adminservices/{id}
     *
     * @param  int  $id
     * @return Response
     */
    public function destroy($id)
    {
	$service=Service::find($id);
        $service->delete();
        return Redirect::back();  
    }

}