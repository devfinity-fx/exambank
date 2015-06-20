<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class Question extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		Schema::create('tbl_questions', function(Blueprint $table)
		{
			$table->string('QuestionID', 12)->primary();
            $table->char('Type', 1)->default('M');
            $table->string('Question');
            $table->string('A');
            $table->string('B');
            $table->string('C');
            $table->string('D');
            $table->string('E');
            $table->char('Answer', 1)->default('A');
            $table->char('Privacy', 1)->default('O');
            $table->string('CreatorID', 10);
			$table->timestamps();

            $table->foreign('CreatorID')
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
		Schema::drop('tbl_questions');
	}

}
