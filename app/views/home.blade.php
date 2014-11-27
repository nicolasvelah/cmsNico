@extends('layout')

@section('content')

@foreach($category as $cat)
    <div>
        <h1>{{$cat->title}}</h1>
        <p>{{$cat->description}}</p>
        <a href="{{ route('category', [$cat->slug, $cat->id]) }}">ver</a>
    </div>
@endforeach

@stop