<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;

class CreateServicesTable extends Migration {

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
		$table->string('service_name');
		$table->string('service_description')->nullable();
		$table->decimal('price',5,2);
                $table->integer('cat_id')->unisgned();
		$table->integer('subcat_id')->unsigned()->nullable();
		$table->timestamps();
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
