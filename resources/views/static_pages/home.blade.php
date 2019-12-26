@extends('layouts.default')
@section('title','Home')
@section('content')

<div class="jumbotron">
    <h1>hello bitpay</h1>
    <p class="lead">你现在所看到的是<a href="https://www.baidu.com/">Baidu</a></p>
    <p>all start from here</p>
    <p><a href="{{route('signup')}}" class="btn btn-lg btn-success" role="button">Now Register</a></p>
</div>



@endsection