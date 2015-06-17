<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class Message extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		Schema::create('tbl_messages', function(Blueprint $table)
		{
			//
            $table->increments('MessageID');
            $table->string('MemoID')->nullable(); //poidi meron poidi wala. etong memo na to e pang system mail
            $table->string('Sender'); // email address itu
            $table->string('Subject');
            $table->text('Description');
            $table->char('MessageType', 1)->default('R');
            $table->string('CreatorID', 11); // userid din itu.
            $table->char('Status', 1)->default('D'); // S - Sent | D - Draft
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
        Schema::drop('tbl_messages');
	}

}
