<html>
	<head>
		<title>Application Form</title>
	</head>
	<body>
		<h2>Add Subject</h2>
		{{ Form::open(array('route'=>'add_subject')) }}
			{{ Form::label('Subject_code', 'Subject Code')}}
			{{ Form::text('Subject_code') }}<br>

			{{ Form::label('Title', 'Subject Title') }}
			{{ Form::text('Title') }}<br>

			{{ Form::label('Semester_offered', 'Semester Offered') }}
			{{ Form::text('Semester_offered') }}<br>

			{{ Form::label('Grade_level', 'Grade Level') }}
			{{ Form::text('Grade_level') }}<br>

			{{ Form::submit('Submit') }}		
		{{Form::close()}}
		
	</body>
</html>

