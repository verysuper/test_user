<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Auth; //Auth::check()
use Illuminate\Auth\Events\Verified;
use App\Entity\Category;
use DB; //test

class HomeController extends Controller
{
    public function __construct()
    {
        // 進入home驗證
        // $this->middleware('auth');
    }

    public function index($parent,Request $request)
    {
        //判斷使用者權限 (email有無"active")
        if(Auth::check()){
            if ($request->user()->hasVerifiedEmail()) {
                session()->put('logined','1');
            }
        }

        //test
        // print_r($parent);
        // echo '<br>';
        // DB::enableQueryLog();
        // $categoryList=Category::where('parent',$parent)->get();
        // var_dump(DB::getQueryLog());
        // echo '<br>';
        // echo '<pre>'; print_r($categoryList); echo '</pre>';
        // foreach ($categoryList as $cate) {
        //     echo $cate->name.'<br>';
        // }
        // exit;

        $binding=[
            'test1'=>'test1',
            'test2'=>'test2',
            'test3'=>'test3',
            'test4'=>'test4',
        ];

        return view('home',$binding);
    }
}
