<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Http\Requests;

class UserController extends Controller
{
    public function index(){
        return view('user.form');
    }

    public function saveData(Request $request)
    {
     dd($request);
    }
}
