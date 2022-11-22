@extends('layouts.main')
@section('content')
<div>
    <form action="{{ route('authors.update', $author->id) }}" method="post">
        @csrf
        @method('patch')
        <div class="form-group mb-3">
            <label for="name">Author's name</label>
            <input type="text" name='name' class="form-control" id="name"  value="{{ $author->name }}"placeholder="Author's name">
        </div>
        <button type="submit" class="btn btn-primary">Изменить</button>
    </form>
</div>
@endsection
