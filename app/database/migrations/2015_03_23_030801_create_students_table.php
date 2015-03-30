<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateStudentsTable extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		Schema::create('students', function(Blueprint $table)
		{
			$table->increments('id');
			$table->string('Student_number');
			$table->string('FName')->nullable();
			$table->string('MName')->nullable();
			$table->string('LName')->nullable();
			$table->enum('Type', array('7','8','9','10','11','12'));
			$table->string('Section');
			$table->string('User_id');
			$table->float('GWAY1Q1')->nullable();
			$table->float('GWAY1Q2')->nullable();
			$table->float('GWAY1Q3')->nullable();
			$table->float('GWAY1Q4')->nullable();
			$table->float('GWAY2Q1')->nullable();
			$table->float('GWAY2Q2')->nullable();
			$table->float('GWAY2Q3')->nullable();
			$table->float('GWAY2Q4')->nullable();
			$table->float('GWAY3Q1')->nullable();
			$table->float('GWAY3Q2')->nullable();
			$table->float('GWAY3Q3')->nullable();
			$table->float('GWAY3Q4')->nullable();
			$table->float('GWAY4Q1')->nullable();
			$table->float('GWAY4Q2')->nullable();
			$table->float('GWAY4Q3')->nullable();
			$table->float('GWAY4Q4')->nullable();
			$table->float('GWAY1')->nullable();
			$table->float('GWAY2')->nullable();
			$table->float('GWAY3')->nullable();
			$table->float('GWAY4')->nullable();
			$table->float('GWA_final')->nullable();
			$table->float('HRY1Q1')->nullable();
			$table->float('HRY1Q2')->nullable();
			$table->float('HRY1Q3')->nullable();
			$table->float('HRY1Q4')->nullable();
			$table->float('HRY2Q1')->nullable();
			$table->float('HRY2Q2')->nullable();
			$table->float('HRY2Q3')->nullable();
			$table->float('HRY2Q4')->nullable();
			$table->float('HRY3Q1')->nullable();
			$table->float('HRY3Q2')->nullable();
			$table->float('HRY3Q3')->nullable();
			$table->float('HRY3Q4')->nullable();
			$table->float('HRY4Q1')->nullable();
			$table->float('HRY4Q2')->nullable();
			$table->float('HRY4Q3')->nullable();
			$table->float('HRY4Q4')->nullable();
			$table->float('HRY1')->nullable();
			$table->float('HRY2')->nullable();
			$table->float('HRY3')->nullable();
			$table->float('HRY4')->nullable();
			$table->float('Homeroom_Grade')->nullable();
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
		Schema::drop('students');
	}

}
