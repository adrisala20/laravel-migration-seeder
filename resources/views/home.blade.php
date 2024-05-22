@extends('layouts.app')

@section('title', 'Home')

@section('content')
<section>
    <h1>Home page</h1>
    <ul>
    @foreach ($trains as $train )
    <li>{{$train->name}}</li>
    @endforeach
    </ul>
  
</section>

@endsection
