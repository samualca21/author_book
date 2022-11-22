@extends('layouts.main')
@section('content')
    <button type="button" class="btn btn-outline-primary mb-3"><a href="{{ route('authors.edit', $author->id) }}">Изменить</button>
    <form action="{{ route('authors.destroy', $author->id) }}" method="post">
        @csrf
        @method('delete')
    <button type="submit" class="btn btn-primary mb-2">Удалить автора</button>
</form>
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
