<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class ExamTopicList extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		Schema::create('tbl_examtopics', function(Blueprint $table)
		{
			//
            $table->increments('ExamTopicID');
            $table->string('ExamID', 10);
            $table->string('TopicID', 15);

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
		Schema::drop('tbl_examtopics');
	}

}
