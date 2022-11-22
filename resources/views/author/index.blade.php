@extends('layouts.main')
@section('content')
    <div class="nav-item">
        <a class="btn btn-primary mb-4 mt-2" aria-current="page" href="{{ route('authors.create')}}">Добавить автора</a>
    </div>
    <ul class="list-group">
    @foreach ($authors as $author)
        <li class="list-group-item">{{ $author->name }}, кол-во книг - {{ count($author->books) }}</li>        
    @endforeach
    </ul>
@endsection
