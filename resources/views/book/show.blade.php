@extends('layouts.main')
@section('content')
<div class="card mb-3" style="width: 20rem;">
    <img src="{{ $book->cover }}" class="card-img-top" alt="...">
    <div class="card-body">
        <h5 class="card-title">{{ $book->title }}</h5>
        <p class="card-text">Автор: {{ $book->author->name }}</p>
    </div>
</div>
@endsection
