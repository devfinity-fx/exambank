<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class Mailbox extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		Schema::create('tbl_mailbox', function(Blueprint $table)
		{
			$table->increments('MailID');
            $table->string('UserID');
            $table->integer('MessageID')->unsigned();
            $table->boolean('Read')->default(false);
            $table->boolean('Starred')->default(false);
            $table->char('Flag', 1)->default('N');
            $table->string('Label', 20);
            $table->char('Status', 1)->default('N');
			$table->timestamps();

            $table->foreign('MessageID')
                ->references('MessageID')
                ->on('tbl_messages')
                ->onDelete('cascade');

            $table->foreign('UserID')
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
		Schema::drop('tbl_mailbox');
	}

}
