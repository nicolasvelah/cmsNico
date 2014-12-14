@extends('login.admin')

@section('title') Login @stop

@section('content')

    <h3>Ingresa</h3>
    @if ($errors->has())
        @foreach ($errors->all() as $error)
            <div>{{ $error }}</div>
        @endforeach
    @endif
   {{ Form::open(['route' => 'login', 'method' => 'POST', 'role' => 'form', 'novalidate']) }}
        {{ Field::text('username') }}
        {{ Field::password('password') }}

        {{ Form::submit('Login', ['class' => 'btn btn-primary']) }}
    {{ Form::close() }}

@stop