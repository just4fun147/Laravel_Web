<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\User;

class RegisterController extends Controller
{
    public function index(){
        return view('perpus/page/registerPage', [
            'title' => 'Register',
            'active' => 'Register'
        ]);
    }

    public function store(Request $request){
        
        $validatedData = $request->validate([
            'name' => 'required|max:60)',
            'email' => 'required|email:rfc,dns|unique:users',
            'password' => 'required|min:6|regex:/^.*(?=.{4,})(?=.*[A-Z])(?=.*[a-z])(?=.*[0-9])(?=.*[\d\x])(?=.*[!$#%]).*$/'
        ]);

        $validatedData['password'] = bcrypt($request->password);
        
        User::create($validatedData);
        return redirect('/perpus');
    }
}
