<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class ExamPart extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		Schema::create('tbl_examparts', function(Blueprint $table)
		{
			//
            $table->increments('ExamPartID');
            $table->string('ExamID', 10);
            $table->string('Part', 3);
            $table->string('HeaderText');
            $table->integer('PointsPerItem');
            $table->integer('TotalItems');
            $table->integer('TotalPoints');


            $table->foreign('ExamID')
                ->references('ExamID')
                ->on('tbl_exams')
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

        Schema::drop('tbl_examparts');
	}

}
