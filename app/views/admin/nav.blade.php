<head>
<link href="css/bootstrap.min.css" rel="stylesheet">
<link href="js/bootstrap.min.js" rel="stylesheet">
<script src="jquery-2.1.1.js"></script>
<style>
	body {
		margin: 0;
		padding: 0;
	}
	nav {
		width: 105%;
		background: #2591f5;
		min-height: 50px;
		color: white;
	}
	nav img {
		max-height: 48px;
	}
	nav * {
		float: left;
	}

	#sidebar {
		
		height: 95%;
		
			background: grey;
			
			overflow: hidden;
		
	}
	.sidebar-box-lg{
		height: 50px;
		width: 108%;
		background: #2591f5;
		margin-top: 5%;
		font-size: 16pt;
		color: white;
		text-align: center;
		
	}

	.sidebar-box-sm{
		height: 50px;
		width: 100%;
		background: #2591f5;
		margin-top: 5%;
			font-family: "Helvetica Neue",Helvetica,Arial,sans-serif;
		color: white;
		text-align: left;
		float: left;
		overflow: hidden;
		min-width: 50px;
		
	}


	.sidebar-box-sm div{
				
		font-size: 30px;
		margin: 10px;
		width: 10%;
		float: left;
		
	}

	.sidebar-box-sm:hover{
				
		background-color: white;
		color: #2591f5;
		transition: all 0.5s;
		
	}
	.sidebar-box-sm .text{
				
		font-size: 16px;
		width: 65%;
		
		
	}

	.header{
	background: #2591f5;
	top: 0px;
	left: 0px;
	width: 100%;
	margin: auto;
	padding-top: 10px;
	padding-bottom: 10px;
	height: 75px;
	border-bottom: 10px groove grey;
	
	/*background: url("logo.png") no-repeat left;  */
	background-size: 80px;
    background-position: 30px 3px;

	}
	#content-pane{
		
		
		
		

	}

	.box-lg {
		width: 40%;
		height: 150px;
		background: #2591f5;
		color: white;
		font-size: 30px;
		padding: 5px;
		float: left;
		margin: 30px;
	}

	.subtext {
		
		font-size: 20px;
		
	}

	.button-ribbon{
		background: grey;
		font-size: 15px;
		margin-left: -1%;
		position:absolute;
		padding: 10px;
		bottom:30px;
	}


</style>
<body>
<script type="text/javascript">
	$(document).ready(function(){
		showhide('#c1');
	});

	function showhide($variable){
		
		$('#c1').hide();
		$('#c2').hide();
		$('#c3').hide();
		$('#c4').hide();
		$('#c5').hide();
		$('#c6').hide();
		$('#c7').hide();
		$($variable).show();
	}

</script>

<nav class="row header">
	
		<div class="col-md-10 col-lg-10 col-xs-12 col-sm-12">
			<img src="logo.png" id="logo"/>	
			<h3>UPRHS Academic Management System</h3>
		</div>
		<div class="col-md-2 col-lg-2 col-xs-12 col-sm-12">
			<button class="btn btn-default" target="login.php">Logout</button>
			
		</div>
	
</nav>
<div class="row">
	<div  id="sidebar" class="col-md-2 col-lg-2 col-sm-2 col-xs-2">
			<div class="sidebar-box-lg">
			
			Christian Dionisio

			</div>

			<div class="sidebar-box-sm"  onclick="showhide('#c1')">
				<div class="glyphicon glyphicon-home"> </div>
				 <div class="text">Home</div>
			</div>

			<div class="sidebar-box-sm" onclick="showhide('#c2')">
					<div class="glyphicon glyphicon-book"></div>
					 <div class="text">Schedule Classes</div>
			</div>

			<div class="sidebar-box-sm" onclick="showhide('#c3')">
					<div class="glyphicon glyphicon-user"></div>
					 <div class="text">Manage Students</div>
			</div>

			<div class="sidebar-box-sm" onclick="showhide('#c4')">
					<div class="glyphicon glyphicon-list"></div>
					 <div class="text">Manage Grades</div>
			</div>

			<div class="sidebar-box-sm" onclick="showhide('#c5')">
				<div class="glyphicon glyphicon-plus"></div>
				 <div class="text">Generate Reports</div>
			</div>

			<div class="sidebar-box-sm" onclick="showhide('#c6')">
				<div class="glyphicon glyphicon-plus"></div>
				 <div class="text">Manage Accounts</div>
			</div>

			<div class="sidebar-box-sm" onclick="showhide('#c7')">
				<div class="glyphicon glyphicon-plus"></div>
				 <div class="text">Add Subject</div>
			</div>

	</div>
	<div id="content-pane" class="col-md-10 col-lg-10 col-xs-12 col-sm-12">
		<div id="c1" class="content">
			<h1>Welcome Christian! Today is <?php echo date('M d,Y'); ?></h1>
		</div>
		<div id="c2" class="content">
			<h1>Schedule Classes</h1>
			<div class="row">
				<div class="col-md-2 col-lg-2 col-xs-12 col-sm-12">
					<div class="sidebar-box-sm" >
					
					 <div class="text">Grade 7</div>
					</div>

					<div class="sidebar-box-sm" >
					
					 <div class="text">Grade 8</div>
					</div>
					<div class="sidebar-box-sm" >
					
					 <div class="text">Grade 9</div>
					</div>
					<div class="sidebar-box-sm" >
					
					 <div class="text">Grade 10</div>
					</div>
					<div class="sidebar-box-sm" >
					
					 <div class="text">Grade 11</div>
					</div>
					<div class="sidebar-box-sm" >
					
					 <div class="text">Grade 12</div>
					</div>
				</div>
				<div class="col-md-10 col-lg-10 col-xs-12 col-sm-12">
					<div class="box-lg" >
					
						 <div class="text">Grade 7</div>
						 <div class="subtext">Kalachuchi</div>

						  <span class="button-ribbon">Manage Section</span>
					</div>
					<div class="box-lg" >
					
						 <div class="text">Grade 7</div>
						 <div class="subtext">Kalachuchi</div>

						  <span class="button-ribbon">Manage Section</span>
					</div>
					<div class="box-lg" >
					
						 <div class="text">Grade 7</div>
						 <div class="subtext">Kalachuchi</div>

						  <span class="button-ribbon">Manage Section</span>
					</div>
					<div class="box-lg" >
					
						 <div class="text">Grade 7</div>
						 <div class="subtext">Kalachuchi</div>

						  <span class="button-ribbon">Manage Section</span>
					</div>
				</div>
			</div>


		</div>
		<div id="c3" class="content">
			<h1>Manage Students</h1>
					<table border="0" name="table1" class="SampleTables table table-hover">
	
		<thead>
			<tr><th>Name</th><th>Number</th><th>Grade</th></tr>
		</thead>
		<tr><td>A</td><td>1</td><td>1.00</td></tr>
		<tr><td>B</td><td>2</td><td>2.00</td></tr>
		<tr><td>C</td><td>3</td><td>3.00</td></tr>
		<tr><td>D</td><td>4</td><td>4.00</td></tr>
		<tr><td>E</td><td>5</td><td>5.00</td></tr>
		</table>
		</div>
		<div id="c4" class="content">
			<h1>Manage Grades</h1>
		</div>
		<div id="c5" class="content">
			<h1>Generate Reports</h1>
		</div>
		<div id="c6" class="content">
			<h1>Manage Accounts</h1>
		</div>
		
		<div id="c7" class="content">
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
		</div>
	
	</div>
</div>

</body>
