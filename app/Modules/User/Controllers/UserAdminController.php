<?php 

namespace App\Modules\User\Controllers;

use App\Http\Controllers\Controller;

use App\Http\Requests\UserAdminAddRequest;
use App\Http\Requests\UserAdminUpdateRequest;

use Crypt;
use Illuminate\Contracts\Encryption\DecryptException;

// Frameworks
use File;
use Auth;
use Validator;
use DB;
use Config;
use Hash;

// Models
use App\Modules\User\Models\User;

class UserAdminController extends Controller {
// mở foder ở chỗ nào cậu nhỉ
	/**
	 * Display a listing of the resource.
	 *
	 * @return Response
	 */
	public function index()
	{
		$users = User::all();
		if($users){
			return view('User::admin.index',['users'=>$users]);
		}else{
			return view('User::admin.index');
		}

		
	}

	/**
	 * Show the form for creating a new resource.
	 *
	 * @return Response
	 */
	public function create()
	{
		return view('User::admin.add');
	}

	/**
	 * Store a newly created resource in storage.
	 *
	 * @return Response
	 */
	public function store(UserAdminAddRequest $req)
	{	

		$user = new User();
		$user->id = uuid();
		$user->name= $req->name;
		$user->email = $req->email;
		$user->password = Crypt::encrypt($req->password);	
           

          if($req->active == null){
          	$user->active = 0;
          }else{
          	$user->active = 1;
          }
	
		$user->save();

		return redirect()->route('user.admin.index');

	}

	/**
	 * Display the specified resource.
	 *
	 * @param  string  $id
	 * @return Response
	 */
	public function show($id)
	{
		return view("User::admin.show");
	}	

	/**
	 * Show the form for editing the specified resource.
	 *
	 * @param  int  $id
	 * @return Response
	 */
	public function edit($id)
	{
		$user = User::find($id);

		$password = Crypt::decrypt($user->password);

		return view('User::admin.edit',['user'=>$user, 'password'=>$password]);
	}

	/**
	 * Update the specified resource in storage.
	 *
	 * @param  int  $id
	 * @return Response
	 */
	public function update(UserAdminUpdateRequest $req, $id)
	{
		$user = User::find($id);
		$user->name= $req->name;
		$user->email = $req->email;
		$user->password = Crypt::encrypt($req->password);	
           

        if($req->active == null){
          $user->active = 0;
        }else{
          $user->active = 1;
        }
	
		$user->save();

		return redirect()->route('user.admin.index');
	}

	/**
	 * Remove the specified resource from storage.
	 *
	 * @param  int  $id
	 * @return Response
	 */
	public function destroy($id)
	{

		return view("User::admin.destroy")
		->with('id', $id);
	}

}
