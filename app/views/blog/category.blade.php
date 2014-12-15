@extends('layout')

@section('content')

@foreach($category as $article)
    <div>
        <h1>{{$article->title}}</h1>
        <p>{{ Str::limit($article->description, 150) }}</p>
       <p><a href="{{ route('article',[$slug, $article->slug, $article->id]) }}">{{ Lang::get('content.leermas') }}</a></p>
    </div>
@endforeach

@stop