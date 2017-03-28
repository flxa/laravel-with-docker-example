<?php

namespace App\Http\Controllers;

use App\Http\Requests;

use Input;
use Validator;
use Redirect;
use Request;
use Session;

class PracticeRevenueController extends Controller
{
	/**
	 * Create a new controller instance.
	 *
	 * @return void
	 */
	public function __construct()
	{
		$this->middleware('auth');
	}

	/**
	 * Show the application dashboard.
	 *
	 * @return \Illuminate\Http\Response
	 */
	public function index()
	{
		return view('practice-revenue');
	}

	/**
	 * Handle Form File Upload for PracticeRevenue
	 *
	 * @param Requests\StorePracticeRevenue $request
	 * @return Requests\StorePracticeRevenue
	 */
	public function uploadHold(Requests\StorePracticeRevenue $request)
	{
		//dd($request->input('import-file'));
		$uploadFile = null;
		if ($request->hasFile('import-file')) {
			$uploadFile = $request->input('import-file');
			//echo '<pre>'.print_r($uploadFile,true).'</pre>';

			View::share('file', $uploadFile);
			$title = 'My Title Here';
			$this->layout->title = $title;
			View::share('title', $title);
			
		} else {

		}
		return view('practice-revenue');
	}


	public function upload() {
		if (Input::file('upload-file')->isValid()) {
			$destinationPath = 'uploads'; // upload path
			$extension = Input::file('upload-file')->getClientOriginalExtension(); // getting image extension
			$fileName = rand(11111,99999).'.'.$extension; // renameing image
			Input::file('upload-file')->move($destinationPath, $fileName); // uploading file to given path
			// sending back with message
			Session::flash('success', 'Upload successfully ' + $destinationPath);
			return Redirect::to('practice-revenue');
		} else {
			// sending back with error message.
			Session::flash('error', 'uploaded file is not valid');
			return Redirect::to('practice-revenue');
		}
	}
}
