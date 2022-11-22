@extends('layouts.main')
@section('content')
    <ul class="list-group">
        <li class="list-group-item"> {{ $author->name }} </li>
        <ul>
        @foreach ($books as $book)
            @if ($book->author_id == $author->id)
                <li>{{ $book->title }}</li>
            @endif
        @endforeach
        </ul>
    </ul>
@endsection
