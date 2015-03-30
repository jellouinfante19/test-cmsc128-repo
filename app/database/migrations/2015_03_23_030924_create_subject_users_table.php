<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateSubjectUsersTable extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		Schema::create('subject_users', function(Blueprint $table)
		{
			$table->increments('id');
			$table->string('Subject_id');
			$table->integer('Year');
			$table->integer('Semester');
			$table->integer('Units');
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
		Schema::drop('subject_users');
	}

}
