<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class DistroMembership extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		Schema::create('tbl_distromemberships', function(Blueprint $table)
		{
			$table->increments('DistroMembershipID');
            $table->string('DistGroupID');
            $table->string('UserID', 11);

            $table->foreign('DistGroupID')
                ->references('DistGroupID')
                ->on('tbl_distgroups')
                ->onDelete('cascade');
		});
	}

	/**
	 * Reverse the migrations.
	 *
	 * @return void
	 */
	public function down()
	{
		Schema::drop('tbl_distromemberships');
	}

}
