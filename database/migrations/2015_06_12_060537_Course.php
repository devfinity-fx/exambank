<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class Course extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		Schema::create('tbl_courses', function(Blueprint $table)
		{
            $table->string('CourseID', 10)->primary();
            $table->string('Description');
            $table->string('CollegeID', 10);
            $table->boolean('Status')->default(false);
            $table->timestamps();

            $table->foreign('CollegeID')
                ->references('CollegeID')
                ->on('tbl_colleges')
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
		Schema::drop('tbl_courses');
	}

}
