<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateCustomersTable extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
	    Schema::create('customers', function(Blueprint $table)
            {
                    $table->increments('id');
                    $table->integer('title');
                    $table->string('firstname',25);
                    $table->string('lastname',25);
                    $table->string('email')->unique()->nullable();
                    $table->string('phone')->nullable();
                    $table->string('mobile')->nullable();
                    $table->string('house_name')->nullable();
                    $table->string('address1')->nullable();
                    $table->string('address2')->nullable();
                    $table->string('postcode')->nullable();
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
	    Schema::drop('customers');	//
	}

}
