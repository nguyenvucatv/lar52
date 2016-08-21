<?php namespace App\Modules\Role\Controllers;

use App\Http\Requests;
use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

// Frameworks
use File;
use Auth;
use Validator;
use DB;
use Config;

// Models


class RoleAdminController extends Controller {

	/**
	 * Display a listing of the resource.
	 *
	 * @return Response
	 */
	public function index()
	{
		return view("Role::admin.index");
	}

	/**
	 * Show the form for creating a new resource.
	 *
	 * @return Response
	 */
	public function create()
	{
		//
	}

	/**
	 * Store a newly created resource in storage.
	 *
	 * @return Response
	 */
	public function store(Request $request)
	{
		$postCategory = $request->get('postCategory');
	}

	/**
	 * Display the specified resource.
	 *
	 * @param  string  $id
	 * @return Response
	 */
	public function show($id)
	{
		return view("Role::admin.show");
	}

	/**
	 * Display the specified resource.
	 *
	 * @param  string  $id
	 * @param  string  $did
	 * @return Response
	 */
	public function doubleShow($id, $did)
	{

	}

	/**
	 * Display the specified resource.
	 *
	 * @param  string  $id
	 * @param  string  $did
	 * @param  string  $tid
	 * @return Response
	 */
	public function tripleShow($id, $did, $tid)
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
		return view("Role::admin.edit")
		->with('id', $id);
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

		return view("Role::admin.destroy")
		->with('id', $id);
	}

}
