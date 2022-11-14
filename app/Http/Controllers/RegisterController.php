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
            'name' => 'max:60|not_regex:/^(admin)$/i',
            'email' => 'required|email:rfc,dns|unique:users',
            'password' => 'required|min:6|regex:/^.*(?=.{4,})(?=.*[A-Z])(?=.*[a-z])(?=.*[0-9])(?=.*[\d\x])(?=.*[!$#%]).*$/',
            'image' => 'required|image|file|max:2048|mimes:jpg,png,jpeg',
        ]);
        if( $request->hasFile('image')) {
            $path = $request->file('image')->store('user-images');
            $validatedData['image'] =$path;
        }

        $validatedData['password'] = bcrypt($request->password);
        
        User::create($validatedData);
        return redirect('/login')->with('success', 'Pendaftaran Berhasil! Silahkan Masuk Untuk Melanjutkan');
    }

}
