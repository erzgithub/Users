<?php

namespace App\Http\Controllers;

use App\User;
use Illuminate\Http\Request;

class UsersController extends Controller
{
    public function index(){
        //$users = User::where('age', '>=', 21)->get();
        $users = User::all();//Read data from database the R in CRUD

        //return $users;

        return view('users.index',compact('users'));

    }
    public function store() 
    {
        $user = new User;//Insert data in Database the C in CRUD
        $user->name =  request('name');
        $user->email =  request('email');
        $user->password =  bcrypt(request('password'));
        $user->save();
        return back();
    }
}
