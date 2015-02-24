<?php namespace App\Http\Controllers;

use App\Http\Requests;
use App\Http\Controllers\Controller;

use Illuminate\Http\Request;
use App\Link;

class LinksController extends Controller {

	public function __construct()
	{
		$this->middleware('auth');
	}

	/**
	 * Display a listing of the resource.
	 *
	 * @return Response
	 */
	public function getIndex()
	{
		$items = Link::all();
		return view('links.index', compact('items'));
	}

	/**
	 * Show the form for creating a new resource.
	 *
	 * @return Response
	 */
	public function getCreate()
	{
		return view('links.create');
	}

	/**
	* Get the input for a new link
	*
	* @return Response
	*/
	public function postCreate(Request $request)
	{
		$newLink = $request->only('title', 'url','kind','reason');
		$this->store($newLink);
		return redirect('links');
	}

	/**
	 * Store a newly created resource in storage.
	 *
	 * @return Response
	 */
	public function store($newLink)
	{
		$link = new Link;

		$link->user_id = \Auth::user()->id;
		$link->title = $newLink['title'];
		$link->url = $newLink['url'];
		$link->kind = $newLink['kind'];
		$link->reason = $newLink['reason'];

		$link->save();
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
