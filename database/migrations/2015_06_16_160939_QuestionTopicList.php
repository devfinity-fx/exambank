<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class QuestionTopicList extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		Schema::create('tbl_questiontopics', function(Blueprint $table)
		{
			//

            $table->increments('QuestionTopicID');
            $table->string('QuestionID', 12);
            $table->string('TopicID', 15);

            $table->foreign('QuestionID')
                ->references('QuestionID')
                ->on('tbl_questions')
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
		Schema::drop('tbl_questiontopics');
	}

}
