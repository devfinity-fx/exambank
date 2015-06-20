<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class Exam extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		Schema::create('tbl_exams', function(Blueprint $table)
		{
			$table->string('ExamID', 10)->primary();
            $table->string('SubjectID', 10);
            $table->char('ExamType', 1);
            $table->char('GradingPeriod', 1);
            $table->char('ExamSet', 1)->default('A');
            $table->char('Privacy', 1)->default('O'); // O - Open | C - Closed for public.
            $table->string('CreatorID', 11);
            $table->boolean('Status')->default(false);
			$table->timestamps();


            $table->foreign('SubjectID')
                ->references('SubjectID')
                ->on('tbl_subjects')
                ->onDelete('cascade');

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
		Schema::drop('tbl_exams');
	}

}
