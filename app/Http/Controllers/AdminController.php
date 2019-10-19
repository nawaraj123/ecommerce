<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Auth;
use Session;
use App\User;
Use Illuminate\Support\Facades\Hash;

class AdminController extends Controller
{
    public function login(Request $request)

    {
    	if($request->isMethod('post'))
    	{
    		$data=$request->input();
            if(Auth::attempt(['email'=>$data['email'],'password'=>$data['password'],'admin'=>'1']))
    		{
    			return view('dashboard');
    		}
    		else
    		{
    			echo "Invalid Username or Password";
    		}
    	}
        return view('login');
    }
    public function logout()
    {
    Session::flush();
    return view('login1');
	}
	public function setting()
	{
		return view('setting');
	}
	public function updatePassword(Request $request)
	{
		if($request->isMethod('post'))
		{

			$data=$request->all();
$check_password=User::where(['email'=>Auth::user()->email])->first();
$current_password=$data['current_pwd'];
//echo $current_password; die();
if(Hash::check($current_password,$check_password->password))
{
	$password=bcrypt($data['new_pwd']);
	//echo $password;die();
	User::where('email',Auth::user()->email)->update(['password'=>$password]);
	//echo 'password changed successfully !!';
		return back()->with('success','Password Changed successfully !!!');
}
else
{
return back()->with('failure','Incorrect Current Password !!!');}


		}
	}
	public function chkPassword(Request $request)
	{
		$data=$request->all();
		$current_password=$data['current_pwd'];
		$check_password=User::where(['admin'=>'1'])->first();
		if(Hash::check($current_password,$check_password->password))
		{
			echo "true";die;
		}
		else
		{
			echo "false";die;
		}




	}
}