<?php namespace App\Http\Controllers;

use App\Book;
use App\Http\Requests;
use App\Http\Requests\BookRequest;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;


class BookController extends Controller {

	public function index()
	{
		$books=Book::all();
        return view('books.home',compact('books'));
	}


	public function create()
	{
		return view('books.create');
	}
	

	 
public function store(Request $request)
	{
		$book=$request->all(); // important!!
	   Book::create($book);
	   return redirect('books');
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
		$book=Book::find($id);
   return view('books.show',compact('book'));
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
		 $book=Book::find($id);
   		return view('books.edit',compact('book'));
	}


	public function update($id, Request $request)
	{
	  $book=Book::find($id);
	  $book->update($request->all());
   
   	return redirect('books');
	}
	
	
	
	public function destroy($id)
	{
		//
		 Book::find($id)->delete();
   		return redirect('books');
	}

}
