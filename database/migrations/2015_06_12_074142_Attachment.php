<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class Attachment extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		Schema::create('tbl_attachments', function(Blueprint $table)
		{
			$table->increments('AttachmentID');
            $table->integer('MessageID')->unsigned();
            $table->string('FileName');
            $table->string('FilePath');
            $table->string('FileType');
            $table->bigInteger('Size');
			$table->timestamps();

            $table->foreign('MessageID')
                  ->references('MessageID')
                  ->on('tbl_messages');
        });

	}

	/**
	 * Reverse the migrations.
	 *
	 * @return void
	 */
	public function down()
	{
		Schema::drop('tbl_attachments');
	}

}
