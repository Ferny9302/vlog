<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\User;


class UsersController extends Controller
{
    public function __construct() {
        $this->middleware('auth');
    }
    public function getUsers(){
        /*Selec * from users*/
        $data = User::all();
        //dd($data);
        return view("admin.users")
            ->with('usuarios',$data);

    }
    public function createUsers(Request $request){
        //dd($request->email);
        //reglas de validacion
        $request->validate([
            "name"=>'required|min:3',
            "nickname"=>'required|min:3|unique:users,nickname',
            "email"=>'required|email|unique:users,email',
            "pass"=>'required|min:5',
            "pass2"=>'required|min:5|same:pass'
        ]);

        $user = new User();

        $user->name = $request->input('name');
        $user->nickname = $request->input('nickname');
        $user->email = $request->input('email');
        $user->password = bcrypt($request->input('pass'));
        
        $user->img = 'default.jpg';
        $user->save();
        
        return redirect("/dashboard/users")
            ->with('success','Usuario creado correctamente');
    }


    

}
