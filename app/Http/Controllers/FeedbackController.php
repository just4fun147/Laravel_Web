<?php

namespace App\Http\Controllers;

use Mail;
use App\Models\Feedback;
use App\Mail\FeedbackMail;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Session;
use Illuminate\Support\Facades\Validator;

class FeedbackController extends Controller
{
    public function index() 
    {
       
        return view('feedback',[
            "title" => "Feedback"
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
        try{ 
           //Mengisi variabel yang akan ditampilkan pada view mail 
           $content = [ 'body' => $request->name, ];
           //Mengirim email ke emailtujuan@gmail.com 
           Mail::to($request->email)->send(new FeedbackMail($content)); 
           Feedback::create([ 'name' => $request->name, 'email' => $request->email, 'content' => $request->content ]); 
           //Redirect jika berhasil mengirim email 
           return redirect('/');
        }catch(Exception $e){ 
                return redirect('/');
            } 
     } 
}
