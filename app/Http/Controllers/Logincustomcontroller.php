<?php

namespace App\Http\Controllers;
use Illuminate\Foundation\Auth\AuthenticatesUsers;

use Auth;
use App\User;
use Illuminate\Http\Request;


class Logincustomcontroller extends Controller
{
    use AuthenticatesUsers;
    public function login(Request $request){
        $this->validate($request, [
            'email'           => 'required|max:255|email|exists:users',
            'password'        => 'required',
        ]);
        if(Auth::attempt([
            'email'=> $request->email,
            'password'=> $request->password
        ]))
        {
            $user = User::where('email',$request->email)->first();
            if($user->is_active())
            {
            if($user->is_admin())
            {              
                return redirect()->route('admindashboard')->with('success','Login Success');
            }          
                return redirect()->route('welcome')->with('success','Login Success');
            
            }
            else
            dd("You are suspended for improper activity");          
            }          
        return redirect()->back()->withErrors(['Login Failed','Invalid Password']);
    }
    
    public function index()
    {
        return view('auth/login');
    }
}
