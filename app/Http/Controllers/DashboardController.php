<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class DashboardController extends Controller
{
    public function index(){
        
        return view('perpus/page/dashboard', [
            'title' => 'Dashboard',
            'active' => 'Dashboard'
        ]);
    }
}
