@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">Dashboard
                    <!-- 待:從controller查詢認證 verify 後，回傳到此作判斷 -->
                    @if (session()->has('logined'))
                        <span style="float:right"><a href="#" style="">add</a></span>
                    @endif
                </div>

                <div class="card-body">
                    @if (session('status'))
                        <div class="alert alert-success" role="alert">
                            {{ session('status') }}
                        </div>
                    @endif

                    <!-- category -->
                    <!-- <div class="row"> -->
                        <a href="#"><div class="col btn"><h2>{{$test1}} »</h2></div></a>
                        <a href="#"><div class="col btn"><h2>{{$test2}} »</h2></div></a>
                        <a href="#"><div class="col btn"><h2>{{$test3}} »</h2></div></a>
                        <a href="#"><div class="col btn"><h2>{{$test4}} »</h2></div></a>
                    <!-- </div> -->
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
