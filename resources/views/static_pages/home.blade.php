@extends('layouts.default')

@section('content')
  <div class="jumbotron">
    <h1>Hello Laravel</h1>
    <p class="lead">
      Laravel Sample Project
    </p>
    <p>
      <a class="btn btn-lg btn-success" href="{{ route('signup') }}" role="button">現在註冊</a>
    </p>
  </div>
@stop