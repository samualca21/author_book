@extends('layouts.guest')
@section('list')
    <ul class="list-group">
    @foreach ($authors as $author)
        <li class="list-group-item"> {{ $author->name }} </li>
        <ul>
        @foreach ($books as $book)
            @if ($book->author_id == $author->id)
                <li>{{ $book->title }}</li>
            @endif
        @endforeach
        </ul>
    @endforeach
    </ul>
@endsection
