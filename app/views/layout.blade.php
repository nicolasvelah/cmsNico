<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="">
    <meta name="author" content="">

    <title>CMS Nico</title>
</head>

<body>
<!-- Menu -->
{{ $MainMenu->asUl() }}

 <!-- Mensaje log in -->

@if (Auth::check())
    <p>
      Te identificaste como {{ Auth::user()->full_name }}
      <a href="{{ route('logout') }}">Salir</a>
    </p>
@endif


@yield('content')

<div class="container">
    <hr>

    <footer>
        <p>&copy; CmsNico 2014</p>
    </footer>
</div>
</body>
</html>