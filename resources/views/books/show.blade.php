@extends('books.layout')

@section('content')

<h2>Book Details</h2>

<div class="card">
<div class="card-body">

<p><strong>Title:</strong> {{ $book->title }}</p>

<p><strong>Author:</strong> {{ $book->author }}</p>

<p><strong>ISBN:</strong> {{ $book->isbn }}</p>

<p><strong>Genre:</strong> {{ $book->genre }}</p>

<p><strong>Published Year:</strong> {{ $book->published_year }}</p>

<p><strong>Status:</strong> {{ $book->status }}</p>

<a href="{{ route('books.index') }}" class="btn btn-primary">Back</a>

</div>
</div>

@endsection