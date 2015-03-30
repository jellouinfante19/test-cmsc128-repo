<?php

class AdminController extends \BaseController {

	/**
	 * Display a listing of the resource.
	 *
	 * @return Response
	 */
	public function index()
	{
		
	}


	/**
	 * Show the form for creating a new resource.
	 *
	 * @return Response
	 */
	public function create()
	{
		return View::make('subjects.create');
	}


	/**
	 * Store a newly created resource in storage.
	 *
	 * @return Response
	 */
	public function store()
	{
		
	}


	/**
	 * Display the specified resource.
	 *
	 * @param  int  $id
	 * @return Response
	 */
	public function show($id)
	{
		//
	}


	/**
	 * Show the form for editing the specified resource.
	 *
	 * @param  int  $id
	 * @return Response
	 */
	public function edit($id)
	{
		//
	}


	/**
	 * Update the specified resource in storage.
	 *
	 * @param  int  $id
	 * @return Response
	 */
	public function update($id)
	{
		//
	}


	/**
	 * Remove the specified resource from storage.
	 *
	 * @param  int  $id
	 * @return Response
	 */
	public function destroy($id)
	{
		//
	}


	public function add_subj()
	{
		return View::make('admin.addsubject');
	}

	public function doAddSubj()
	{
		$rules = array(
			'Subject_code' => 'required|unique:subjects,Subject_code', 
			'Title' => 'required|unique:subjects,Title',
			'Semester_offered' => 'required|integer|between:1,3',
			'Grade_level' => 'required|integer|between:7,12'
		);
		$messages = array(
			'required' => 'The :attribute field is required.',
		    	'unique' => 'The :attribute field already exists.',
		    	'between' => 'The :attribute must be between :min - :max.'
		);
		$validator = Validator::make(Input::all(), $rules, $messages);
		if (! $validator->fails()) {
			$subject       = new Subject;
			$subject->User_id = 1;
			$subject->Subject_code = Input::get('Subject_code');
			$subject->Title = Input::get('Title');
			$subject->Semester_offered = Input::get('Semester_offered');
			$subject->Grade_level = Input::get('Grade_level');
			$subject->save();
		    	Session::flash('message', 'Subject Added Successfully!');
		    	return Redirect::to('/home');
		} else {
			$messages = $validator->messages();
			//dd($messages);
			return Redirect::to('/home')
            			->withErrors($validator);	
		}
	}

	public function add_student()
	{
		return View::make('admin.addstudent');
	}

	public function doAddStudent()
	{
		$student = new Student;
		$student->Student_number = Input::get('Student_Number');
		$student->Type = Input::get('Year_Level');
		$student->Section = Input::get('Section');
		$student->User_id = 1;
		$student->save();
	    	Session::flash('message', 'Subject Added Successfully!');
	   	return Redirect::to('/home');
		
		
	}	

	public function showHome()
	{
		$subject = DB::table('subjects')->get();
		return View::make('nav')
			->with('subject',$subject);
	}
}
