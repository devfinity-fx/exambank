<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class Recipients extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		Schema::create('tbl_recipients', function(Blueprint $table)
		{
			//
            $table->increments('RecipientID');
            $table->integer('MessageID')->unsigned();
            $table->string('EmailAddress');

            $table->foreign('MessageID')
                ->references('MessageID')
                ->on('tbl_messages')
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
		Schema::drop('tbl_recipients');
	}

}
