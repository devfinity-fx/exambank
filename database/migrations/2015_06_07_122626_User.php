<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class User extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		Schema::create('tbl_users', function(Blueprint $table)
		{
			$table->string('UserID', 11)->primary();
            $table->string('Email', 50)->unique();
            $table->string('Password', 60);
            $table->char('AccessLevel', 1)->default('F');
            $table->string('LastName', 30);
            $table->string('FirstName', 30);
            $table->string('MiddleName', 30)->nullable();
            $table->char('Gender', 1)->default('M');
            $table->dateTime('DateOfBirth');
            $table->text('Address');
            $table->string('ContactNo', 15);
            $table->boolean('LoginStatus')->default(false);
            $table->boolean('AccountStatus')->default(false);
            $table->string('remember_token');
			$table->timestamps();
		});
	}

	/**
	 * Reverse the migrations.
	 *
	 * @return void
	 */
	public function down()
	{
		Schema::drop('tbl_users');
	}

}
