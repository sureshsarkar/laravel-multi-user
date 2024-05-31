<?php

namespace App\Http\Controllers;
use Illuminate\Support\Facades\Auth;

use Illuminate\Http\Request;

class SubUserController extends Controller
{
    public function dashboard(){
      return view('/sub-user.dashboard');
    }
}
