<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class ServiceCategories extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
            Schema::create('service_categories',function(Blueprint $table)
            {
                $table->increments('id');
                $table->string('name')->unique();
                $table->text('description')->nullable();
		$table->timestamp();
            
            });
	}

	/**
	 * Reverse the migrations.
	 *
	 * @return void
	 */
	public function down()
	{
	    Schema::drop('service_categories');
	}

}
