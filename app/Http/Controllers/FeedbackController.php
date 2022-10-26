<?php

namespace App\Http\Controllers;

use App\Models\Feedback;
use Illuminate\Http\Request;
use App\Mail\FeedbackMail;
use Mail;

class FeedbackController extends Controller
{
    public function index() 
    {
       
        return view('home',[
            "title" => "Home"
        ]);
    }

    public function create() 
    { 
        return view('feedback',[
            "title" => "Feedback"
        ]);
    }
    public function store(Request $request) { 
        //Validasi Formulir 
        $this->validate($request, [ 'name' => 'required', 'email' => 'required', 'content' => 'required' ]); 
        //Fungsi Simpan Data ke dalam Database 
        Feedback::create([ 'name' => $request->name, 'email' => $request->email, 'content' => $request->content ]); 
     
        try{ 
           //Mengisi variabel yang akan ditampilkan pada view mail 
           $content = [ 'body' => $request->name, ];
           //Mengirim email ke emailtujuan@gmail.com 
           Mail::to($request->email)->send(new FeedbackMail($content)); 
           //Redirect jika berhasil mengirim email 
            
           return redirect('/');
    }catch(Exception $e){ 
        return redirect('/');  
        } 
     } 
}
