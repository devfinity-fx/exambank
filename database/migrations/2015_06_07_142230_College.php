<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class College extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		Schema::create('tbl_colleges', function(Blueprint $table)
		{
			$table->string('CollegeID', 10)->primary();
            $table->string('Description');
            $table->string('ChairpersonID', 11)->nullable(); // at first.
            $table->string('SecretaryID', 11)->nullable();
            $table->boolean('Status')->default(false);
			$table->timestamps();

            $table->foreign('ChairpersonID')
                ->references('UserID')
                ->on('tbl_users')
                ->onDelete('cascade');

            $table->foreign('SecretaryID')
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
		Schema::drop('tbl_colleges');
	}

}
