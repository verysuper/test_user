@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">Dashboard
                    <!-- 待:從controller查詢認證後，回傳到此作判斷 -->
                    <span style="float:right"><a href="#" style="">add</a></span>
                </div>

                <div class="card-body">
                    @if (session('status'))
                        <div class="alert alert-success" role="alert">
                            {{ session('status') }}
                        </div>
                    @endif

                    <!-- category -->
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
