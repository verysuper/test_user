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
                    @foreach($list as $item)
                        <a href="/home/{{$item->id}}">
                            <div class="col btn">
                                <h2>{{$item->name}} »</h2>
                            </div>
                        </a>
                    @endforeach
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
