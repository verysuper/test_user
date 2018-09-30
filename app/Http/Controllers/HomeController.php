<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Auth; //Auth::check()
use Illuminate\Auth\Events\Verified;

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
    public function index($parent=0,Request $request)
    {
        //判斷有無使用者登入
        if(Auth::check()){
            //判斷帳號是否 "active"
            if ($request->user()->hasVerifiedEmail()) {
                session()->put('logined','1');
            }
        }


        return view('home');
    }
}
