@extends('layouts.main')
@section('content')
<button type="button" class="btn btn-outline-primary mb-2"><a href="{{ route('books.edit', $book->id) }}">Изменить</button>
<form action="{{ route('books.destroy', $book->id) }}" method="post">
    @csrf
    @method('delete')
    <button type="submit" class="btn btn-primary mb-2">Удалить книгу</button>
</form>
<div class="card mb-3" style="width: 20rem;">
    <img src="{{ $book->cover }}" class="card-img-top" alt="...">
    <div class="card-body">
        <h5 class="card-title">{{ $book->title }}</h5>
        <p class="card-text">Автор: {{ $book->author->name }}</p>
    </div>
</div>
@endsection
