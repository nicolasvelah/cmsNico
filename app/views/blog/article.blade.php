@extends('layout')

@section('content')

@foreach($article as $art)
    <div>
        <h1>{{$art->title}}</h1>
        <p>{{ $art->description}}</p>
    </div>
    <p>
        <a href="{{ route('category', [$catslug, $art->cat_id]) }}">{{ Lang::get('content.regresar') }}</a>
    </p>
@endforeach
<h3>Comments</h3>




@foreach($comments as $comment)
    <div>
        <p><strong>Usuario: {{$comment->user_id}}</strong><br>
        {{ $comment->comment}}</p>
    </div>
@endforeach
@stop