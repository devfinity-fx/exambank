<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class ExamQuestion extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		Schema::create('tbl_examquestions', function(Blueprint $table)
		{
			//
            $table->increments('ExamQuestionID');
            $table->integer('ExamPartID')->unsigned(); // mixed exam id & part
            $table->string('QuestionID', 12);
            $table->integer('Sequence'); // occurrence#.


            $table->foreign('ExamPartID')
                ->references('ExamPartID')
                ->on('tbl_examparts')
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
        Schema::drop('tbl_examquestions');
	}

}
