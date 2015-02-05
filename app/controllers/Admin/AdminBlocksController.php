<?php

class AdminBlocksController extends \BaseController {

	/**
	 * Display a listing of blocks
	 *
	 * @return Response
	 */
	public function index()
	{
		$blocks = Block::all();

		return View::make('admin.blocks.index', compact('blocks'));
	}

	/**
	 * Show the form for creating a new block
	 *
	 * @return Response
	 */
	public function create()
	{
		return View::make('admin.blocks.create');
	}

	/**
	 * Store a newly created block in storage.
	 *
	 * @return Response
	 */
	public function store()
	{
		$validator = Validator::make($data = Input::all(), Block::$block_rules);

		if ($validator->fails())
		{
			return Redirect::back()->withErrors($validator)->withInput();
		}

		Block::create($data);

		return Redirect::route('admin.blocks');
	}

	/**
	 * Display the specified block.
	 *
	 * @param  int  $id
	 * @return Response
	 */
	public function show($id)
	{
		$block = Block::findOrFail($id);
		return View::make('admin.blocks.show', compact('block'));
	}

	/**
	 * Show the form for editing the specified block.
	 *
	 * @param  int  $id
	 * @return Response
	 */
	public function edit($id)
	{
		$block = Block::find($id);

		return View::make('admin.blocks.edit', compact('block'));
	}

	/**
	 * Update the specified block in storage.
	 *
	 * @param  int  $id
	 * @return Response
	 */
	public function update($id)
	{
		$block = Block::findOrFail($id);
		$data = Input::all();
		$data['block_active']=(isset($data['block_active']))?'1':'0';
		
		$validator = Validator::make($data, Block::$block_rules);
			
		if ($validator->fails())
		{
			return Redirect::back()->withErrors($validator)->withInput();
		}

		$block->update($data);

		return Redirect::route('admin.blocks');
	}

	/**
	 * Remove the specified block from storage.
	 *
	 * @param  int  $id
	 * @return Response
	 */
	public function destroy($id)
	{
		Block::destroy($id);

		return Redirect::route('blocks.index');
	}
	
	public function bert()
	{
		$test_data=Input::all();
		return View::make('admin.blocks.test',compact('test_data'));
	}

}
