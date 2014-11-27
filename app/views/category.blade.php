@extends('layout')

@section('content')

@foreach($category as $article)
    <div>
        <h1>{{$article->title}}</h1>
        <p>{{$article->description}}</p>
       <p>{{$article->cat_id}}</p>
    </div>
@endforeach

@stop