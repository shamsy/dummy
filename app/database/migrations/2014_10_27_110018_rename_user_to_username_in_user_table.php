<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class RenameUserToUsernameInUserTable extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{	
            Schema::table('users', function(Blueprint $table)
            {
                //$table->renameColumn('name', 'username'); //didn't work
                //DB::select(DB::raw('alter table users change name username varchar(20) character set utf8 collate utf8_general_ci default null'));
                //Worked but throw error at the end
            });        
	}

	/**
	 * Reverse the migrations.
	 *
	 * @return void
	 */
	public function down()
	{
		Schema::table('users', function(Blueprint $table)
		{
			//
		});
	}

}
