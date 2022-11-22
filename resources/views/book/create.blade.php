@extends('layouts.main')
@section('content')
<div>
    <form action="{{ route('books.store') }}" method="post">
        @csrf
        <div class="form-group">
            <label for="title">Book title</label>
            <input type="text" name='title' class="form-control" id="title"  placeholder="Title">
        </div>
        <div class="form-group">
            <label for="cover">Link to cover (image)</label>
            <input type="text" name='cover' class="form-control" id="cover"  placeholder="Cover">
        </div>
        <div class="form-group">
            <label for="author">Author's name</label>
            <input type="text" name='author' class="form-control" id="author"  placeholder="Author's name">
        </div>
        <!-- <select class="form-select" name='author_id' aria-label="Пример выбора по умолчанию">
            <option selected>Откройте это меню выбора</option>
            @foreach ($authors as $author)
                <option value="{{ $author->id }}">{{ $author->name }}</option>
            @endforeach
        </select> -->
        <button type="submit" class="btn btn-primary">Add book</button>
    </form>
</div>
@endsection