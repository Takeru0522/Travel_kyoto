<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\User;

class UserController extends Controller
{
    // public function show(){
    //     $users = User::all(); 
    //     return view('users.show',['users' => $users]);
    // }

    public function __construct()
    {
        // $this->middleware('auth');
    }

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Contracts\Support\Renderable
     */
    // public function show()
    // {
    //     // return view('users.show');
    //     $users = User::find(1);

    //     return view('users.show',['users' => $users]);
    // }
}
