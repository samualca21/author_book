<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="{{ asset('css/app.css') }}">
    <title>Document</title>
</head>
<body>
<div class="container">
    <a class="btn btn-info mt-5" href="{{ route('guest.index')}}">Гостевая страница</a>
    <ul class="nav">
        
        <li class="d-grid gap-2 col-6 mx-auto">
            <a class="btn btn-primary btn-lg mt-3" href="{{ route('books.index')}}">Книги</a>
            <a class="btn btn-success btn-lg mb-5" href="{{ route('authors.index')}}">Авторы</a>
        </li>
    </ul>
    @yield('content')
</div>
</body>
</html>