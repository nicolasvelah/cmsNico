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

{{Comments::comments()}}

@if (Auth::check())
<h3>Comments</h3>
    {{ Form::open(['route' => 'comment', 'method' => 'PUT', 'role' => 'form', 'novalidate']) }}
        {{ Field::radio('rate', '1') }}
        {{ Field::radio('rate', '2') }}
        {{ Field::radio('rate', '3') }}
        {{ Field::radio('rate', '4') }}
        {{ Field::radio('rate', '5') }}


        {{ Field::text('title') }}
        {{ Field::textarea('comment') }}

        {{ Form::hidden('user_id', Auth::user()->id) }}
        {{ Form::hidden('component_name', 'article') }}
        {{ Form::hidden('component_item_id', $id) }}

        {{ Form::submit('Envíar', ['class' => 'btn btn-primary']) }}
    {{ Form::close() }}
@endif
@foreach($comments as $comment)
    <div>
        <p><strong>Usuario: {{$comment->username}}</strong><br>
        <strong>Rate: {{$comment->rate}}</strong><br>
        <strong>Date: {{ Str::limit($comment->created_at, 10, '') }}</strong><br>

        {{ $comment->comment}}</p>
    </div>
@endforeach
@stop