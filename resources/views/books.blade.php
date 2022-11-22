@extends('layouts.main')
@section('content')
    @foreach ($books as $book)
            <div class="card" style="width: 18rem;">
                <img src="{{ $book->cover }}" class="card-img-top" alt="...">
                <div class="card-body">
                    <h5 class="card-title">{{ $book->title }}</h5>
                    <p class="card-text">Автор: {{ $book->author->name }}</p>
                </div>
            </div>
    @endforeach
@endsection
