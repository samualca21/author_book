@extends('layouts.main')
@section('content')
<div>
    <form action="{{ route('authors.store') }}" method="post">
        @csrf
        <div class="form-group">
            <label for="name">Author's name</label>
            <input type="text" name='name' class="form-control" id="name"  placeholder="Author's name">
        </div>
        <button type="submit" class="btn btn-primary">Add author</button>
    </form>
</div>
@endsection