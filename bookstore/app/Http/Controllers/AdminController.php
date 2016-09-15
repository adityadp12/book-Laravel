<?php namespace App\Http\Controllers;

use App\Http\Requests;
use App\Http\Controllers\Controller;

use Illuminate\Http\Request;

class Admincontroller extends Controller {

	/**
	 * Display a listing of the resource.
	 *
	 * @return Response
	 */
	public function index()
	{
		//
		
	}

	/**
	 * Show the form for creating a new resource.
	 *
	 * @return Response
	 */
		 
	  public function upload() {
	    if(Input::hasFile('file')) {
	      //upload an image to the /img/tmp directory and return the filepath.
	      $file = Input::file('file');
	      $tmpFilePath = '/img/tmp/';
	      $tmpFileName = time() . '-' . $file->getClientOriginalName();
	      $file = $file->move(public_path() . $tmpFilePath, $tmpFileName);
	      $path = $tmpFilePath . $tmpFileName;
	      return response()->json(array('path'=> $path), 200);
	    } else {
	      return response()->json(false, 200);
	    }
	  }


	public function create()
	{
		//
	}

	/**
	 * Store a newly created resource in storage.
	 *
	 * @return Response
	 */
	public function store()
	{
		//
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

}
