<?php

namespace App\Http\Controllers\User;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class Home extends Controller
{
    public function __construct()
    {
    
    }
    public function index(){
    	return view('User.index');
    }
   
}
