<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\models\User;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Session;

class AuthController extends Controller
{
   
    public function loadRegister()
    {
        if(Auth::user()){
            $route = $this->redirectDash();
            return redirect($route);
        }
        return view('register');
    }

    
    public function register(Request $request)
    {
        $request->validate([
            'name' => 'string|required|min:2',
            'email' => 'string|email|required|max:100',
            'password' =>'string|required|min:6',
            'role' =>'string|required'
        ]);
     

        $user = new User;
        $user->name = $request->name;
        $user->role = $request->role;
        $user->email = $request->email;
        $user->password = Hash::make($request->password);
   
        $user->save();

        $userCredential = $request->only('email','password');

        if(Auth::attempt($userCredential)){

            $route = $this->redirectDash();

            return redirect($route);
        }
        else{
            return redirect('/register');
        }
    }



    public function loadLogin()
    {
        if(Auth::user()){
            $route = $this->redirectDash();
            return redirect($route);
        }
        return view('login');
    }

   public function login(Request $request)
    {
      
        $request->validate([
            'email' => 'string|required|email',
            'password' => 'string|required'
        ]);
    //  echo $p =   Hash::make('123456');
    //  exit;
        $userCredential = $request->only('email','password');

   

        if(Auth::attempt($userCredential)){

            $route = $this->redirectDash();

            return redirect($route);
        }
        else{
            return back()->with('error','Username & Password is incorrect');
        }
    }

    public function loadDashboard()
    {
        return view('user.dashboard');
    }

    public function redirectDash()
    {
        $redirect = '';

        if(Auth::user() && Auth::user()->role == 1){
            $redirect = '/super-admin/dashboard';
        }
        else if(Auth::user() && Auth::user()->role == 2){
            $redirect = '/admin/dashboard';
        }
        else if(Auth::user() && Auth::user()->role == 3){
            $redirect = '/sub-admin/dashboard';
        }
        else if(Auth::user() && Auth::user()->role == 4){
            $redirect = '/user/dashboard';
        }
        else if(Auth::user() && Auth::user()->role == 5){
            $redirect = '/sub-user/dashboard';
        }
        else{
            $redirect = '/dashboard';
        }

        return $redirect;
    }

    public function logout(Request $request)
    {
        $request->session()->flush();
        Auth::logout();
        return redirect('/');
    }
}
