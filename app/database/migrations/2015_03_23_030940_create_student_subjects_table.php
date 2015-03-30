<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateStudentSubjectsTable extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		Schema::create('student_subjects', function(Blueprint $table)
		{
			$table->increments('id');
			$table->string('Student_id');
			$table->string('Subject_teacher_id');
			$table->float('GradeQ1');
			$table->float('GradeQ2');
			$table->float('GradeQ3');
			$table->float('GradeQ4');
			$table->float('Subject_grade');
			$table->float('HR_gradeQ1');
			$table->float('HR_gradeQ2');
			$table->float('HR_gradeQ3');
			$table->float('HR_gradeQ4');
			$table->float('Homeroom_grade');
			$table->boolean('isAdviser');
			$table->integer('No_of_fail');
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
		Schema::drop('student_subjects');
	}

}
