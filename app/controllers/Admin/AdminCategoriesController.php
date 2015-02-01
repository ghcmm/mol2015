<?php

class AdminCategoriesController extends \BaseController {
    
    public function index()
    {
        $cats=Category::all();
        //return View::make('admin.categories.list')->with('cats',$cats);
	return View::make('admin.categories.list', compact('cats'));
    }
    
    public function create()
    {
	return View::make('admin.categories.create');
    }
    
    
    public function store()
    {
        $input=Input::all();
        $validation=Validator::make($input, Category::$cat_rules);
        if($validation->passes())
        {
            Category::create($input);
            return Redirect::route('admin.categories');
        }
        return Redirect::back()->withInput()->withErrors($validation); 
    }
    
    public function edit($id)
    {
       $category=Category::find($id);
       return View::make('admin.categories.edit',compact('category'));
    }
    
    public function update($id)
    {
        $input=Input::all();
        
        $validation=Validator::make($input, Category::$cat_rules);
        if($validation->passes())
        {
            $cat=Category::find($id);
            $cat->update($input);
            return Redirect::route('admin.categories');
        }
        
        return Redirect::back()->withInput()->withErrors($validation);
    }
    
    public function destroy($id)
    {
        Category::destroy($id);
        return Redirect::route('admin.categories');
    }
	

	

}