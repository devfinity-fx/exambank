<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class Topic extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		Schema::create('tbl_topics', function(Blueprint $table)
		{
			$table->string('TopicID', 15)->primary();
            $table->string('SubjectID',10);
            $table->string('Title');
            $table->char('GradingPeriod', 1)->default('P');

            $table->foreign('SubjectID')
                ->references('SubjectID')
                ->on('tbl_subjects')
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
		Schema::drop('tbl_topics');
	}

}
