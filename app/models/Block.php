<?php

class Block extends \Eloquent {

	// Add your validation rules here
	public static $block_rules = [
	    'block_title' => 'required',
            'block_text' => 'required',
	];

	// Don't forget to fill this array
	protected $fillable = ['block_title','block_text','block_active','block_index'];

}