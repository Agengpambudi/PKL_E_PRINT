<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Auth;
class HomeController extends Controller
{
    public function index()
    {
        return view('home');
    }

    public function welcome(){
if (Auth::user()->level == 'admin') {
    return redirect('/daftar-cetak');
}else{
    return view('welcome');
}
    }
}
