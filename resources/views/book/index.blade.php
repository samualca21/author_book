@extends('layouts.main')
@section('content')
    <div class="nav-item">
        <a class="btn btn-primary mb-4 mt-2" aria-current="page" href="{{ route('books.create')}}">Добавить книгу</a>
    </div>
    <div class="d-flex flex-wrap justify-content-around max-4">
    @foreach ($books as $book)
            <div class="card p-1 m-2" style="width: 20rem;">
                <img src="{{ $book->cover }}" class="card-img-top" alt="...">
                <div class="card-body">
                    <h5 class="card-title"> <a href=" {{ route('books.show', $book->id) }}">{{ $book->title }}</h5>
                    <p class="card-text">Автор: {{ $book->author->name }}</p>
                </div>
            </div>
    @endforeach
    </div>
@endsection
