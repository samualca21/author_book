@extends('layouts.main')
@section('content')
    <ul class="list-group">
    @foreach ($authors as $author)
        <li class="list-group-item">{{ $author->name }}, кол-во книг - {{ count($author->books) }}</li>        
    @endforeach
    </ul>
@endsection
