<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class Event extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		Schema::create('tbl_events', function(Blueprint $table)
		{
			//
            $table->increments('EventID');
            $table->string('Title');
            $table->text('Description');
            $table->string('AcademicYearID', 8);
            $table->date('EventDate');
            $table->boolean('Notification')->default(false);
            $table->dateTime('NotifyTime');
            $table->char('EventType', 1)->default('U');
            $table->string('CreatorID', 10);
            $table->timestamps();

            $table->foreign('AcademicYearID')
                ->references('AcademicYearID')
                ->on('tbl_academicyears')
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
        Schema::drop('tbl_events');
	}

}
