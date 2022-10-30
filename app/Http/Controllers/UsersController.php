<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\User;

class UsersController extends Controller
{
        
    public function index(){
        $user = User::all();
        return view('users.index', compact('user'));
    }

    public function create(){
        return view('users.create');
    }

    public function store(Request $request){
        $request->validate([
            "email" => "required",
            "password" => "required"
        ]);

        User::create($request->all());
        return redirect()->route('users.index')->with('success',"Berhasil Menambahkan");
    }

    public function edit(User $user){
        return view('users.edit',compact('user'));
    }
    
    public function update(Request $request, User $user){
        $request->validate([
            "email" => "required",
            "password" => "required"
        ]);

        $user->update($request->all());
        return redirect()->route('users.index')->with('success',"Berhasil Menambahkan");
    }

    public function show(User $user){
        $user = User::all();
        return view('users.index',compact('user'));
    }

    public function destroy(User $user){
        echo $user;
        $user->delete();
        return redirect()->route('users.index')->with('success',"Berhasil Menghapus");
    }

    // public function pageAddUsers(){
    //     return view('addusers');
    // }

    // public function add(){
    //     // User::insert([
    //     //     "email" => $_POST['email'],
    //     //     "password" => $_POST['password']
    //     // ]);
    //     // route('/');
    //     return view('home', ["user" => $data]);
    // }

    public function read(){
        return User::all();
    }

    // public function delete($idUser){
    //     return User::delete(["id" => $idUser]);
    // }

}
