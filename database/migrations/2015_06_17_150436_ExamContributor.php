<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class ExamContributor extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		Schema::create('tbl_examcontributors', function(Blueprint $table)
		{
			$table->increments('ContributorID');
            $table->string('ExamID', 10);
            $table->string('UserID', 11);

            $table->foreign('ExamID')
                ->references('ExamID')
                ->on('tbl_exams')
                ->onDelete('cascade');

            $table->foreign('UserID')
                ->references('UserID')
                ->on('tbl_users')
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
		Schema::drop('tbl_examcontributors');
	}

}
