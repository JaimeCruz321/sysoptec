<?php

namespace App\Http\Controllers;
use App\Models\User;
use Illuminate\Http\Request;

class UserController extends Controller
{
   
    public function index(){

        $users = User::all();
        return view('users.index', compact('users'));
    }
   
    public function create(){
        return view('users.create');
    }
    
    public function createComputer(){
        return view('computer.create');
    }

    public function store(Request $request){

       

         // $request->validate([
        //     'name' => 'required|min:3|max:5',
        //     'username' => 'required',
        //     'email' => 'required|email|unique:users',
        //     'password' => 'required'
        // ]);
        User::create($request->only('name', 'username', 'email')
            + [
                'password' => bcrypt($request->input('password')),
            ]);
        return redirect()->route('users.index');
    }
}
