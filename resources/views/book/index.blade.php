@extends('layouts.main')
@section('content')
    <div class="nav-item">
        <a class="btn btn-primary mb-4 mt-2" aria-current="page" href="{{ route('books.create')}}">Добавить книгу</a>
    </div>
    @foreach ($books as $book)
            <div class="card mb-3" style="width: 25rem;">
                <img src="{{ $book->cover }}" class="card-img-top" alt="https://static4.depositphotos.com/1015530/309/i/600/depositphotos_3098299-stock-photo-single-green-book.jpg">
                <div class="card-body">
                    <h5 class="card-title">{{ $book->title }}</h5>
                    <p class="card-text">Автор: {{ $book->author->name }}</p>
                </div>
            </div>
    @endforeach
@endsection
