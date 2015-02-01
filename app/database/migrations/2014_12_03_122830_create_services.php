<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;

class CreateServices extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{   
            Schema::create('services',function(Blueprint $table)
            {
                $table->increments('id');
                $table->integer('cat_id');
                $table->string('service');
                $table->decimal('price',5,2);
            });
	}

	/**
	 * Reverse the migrations.
	 *
	 * @return void
	 */
	public function down()
	{
	    Schema::drop('services');
	}

}
