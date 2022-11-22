@extends('layouts.main')
@section('content')
<div>
    <form action="{{ route('books.store') }}" method="post">
        @csrf
        <div class="form-group mb-3">
            <label for="title">Book title</label>
            <input type="text" name='title' class="form-control" id="title"  placeholder="Title">
        </div>
        <div class="form-group mb-3">
            <label for="cover">Link to cover (image)</label>
            <input type="text" name='cover' class="form-control" id="cover"  placeholder="Cover">
        </div>
        <div class="form-group mb-3">
            <label for="author">Author's name</label>
            <input type="text" name='author' class="form-control" id="author"  placeholder="Author's name">
        </div>
        <button type="submit" class="btn btn-primary">Добавить</button>
    </form>
</div>
@endsection