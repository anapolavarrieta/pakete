<?php namespace App\Http\Controllers;

use App\Http\Requests;
use App\Http\Controllers\Controller;
use Illuminate\Database\Eloquent\ModelNotFoundException;



use Illuminate\Http\Request;

class UsersController extends Controller {

	public function home()
	{
		return View('user_home');
	}

	public function signup()
	{
		return View('signup');
	}

	public function login()
	{
		return View('login');
	}

	public function admin()
	{
		$users= \App\User::all();
		return View('admin')->with('users',$users);
	}

	public function users_hours()
	{
		$users= \App\User::all();
		return View('users_hours')->with('users',$users);
	}
	

	public function userhoursid($id)
	{
		$user= \App\User::findOrFail($id);
		$first_reg= $user->register()->first();			
		try{
			
				$date1= $first_reg->date;
				$hour1= $first_reg->time;
				return View('userhours')
						->with('user', $user)
						->with('date1', $date1)
						->with ('hour1', $hour1)
						->with ('lat', $first_reg->lat);
			}
		catch (Exception $e){
				return Redirect('/users_hours')
					->with('flash_message','El usuario no tiene registros');
			}
		
	}

	public function edit_user($id)
	{
		$user=\App\User::findOrFail($id);
		try{
			return View('edit_user')
					->with('user', $user);
		}
		catch (Exception $e){
				return Redirect('users_hours');
			}
	}
	

}
