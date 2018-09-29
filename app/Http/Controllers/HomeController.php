<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Auth; //Auth::check()

class HomeController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        // 進入home驗證
        // $this->middleware('auth');
    }

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        if(Auth::check()){
            //待:判斷帳號是否 "active"
            session()->put('logined','1');
        }
        return view('home');
    }
}
