<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateServiceSubcatIdToken extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
            Schema::table('services',function(Blueprint $table)
            {
                $table->integer('subcat_id')->unsigned()->nullable();
                $table->timestamps();
                $table->rememberToken();
            });	//
	}

	/**
	 * Reverse the migrations.
	 *
	 * @return void
	 */
	public function down()
	{
	    Schema::table('services',function(Blueprint $table)
            {
                $table->dropColumn('subcat_id');
                $table->dropColumn('remember_token');
                $table->dropTimestamps();
            });
	}

}
