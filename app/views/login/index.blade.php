@extends('login.admin')

@section('title') Login @stop

@section('content')



    <h3>Ingresa</h3>
    @if ($errors->has())
        @foreach ($errors->all() as $error)
            <div>{{ $error }}</div>
        @endforeach
    @endif
    {{ Form::open(['route' => 'login', 'method' => 'POST', 'role' => 'form']) }}
            <div>
                {{ Form::text('username', null, ['placeholder' => 'Username', 'class' => 'form-control']) }}
            </div>
             <div class="form-group">
                {{ Form::password('password', ['placeholder' => 'Password', 'class' => 'form-control']) }}
             </div>
                {{ Form::submit('Login', ['class' => 'btn btn-primary']) }}
    {{ Form::close() }}

@stop

