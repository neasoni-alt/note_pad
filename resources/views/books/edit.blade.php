@extends('books.layout')

@section('content')

<h2>Edit Book</h2>

<form action="{{ route('books.update',$book->id) }}" method="POST">
@csrf
@method('PUT')

<div class="mb-3">
<label>Title</label>
<input type="text" name="title" class="form-control" value="{{ $book->title }}">
</div>

<div class="mb-3">
<label>Author</label>
<input type="text" name="author" class="form-control" value="{{ $book->author }}">
</div>

<div class="mb-3">
<label>ISBN</label>
<input type="text" name="isbn" class="form-control" value="{{ $book->isbn }}">
</div>

<div class="mb-3">
<label>Genre</label>
<input type="text" name="genre" class="form-control" value="{{ $book->genre }}">
</div>

<div class="mb-3">
<label>Published Year</label>
<input type="number" name="published_year" value="{{ $book->published_year }}" class="form-control">
</div>

<div class="mb-3">
<label>Status</label>
<select name="status" class="form-control">

<option value="available" {{ $book->status=='available' ? 'selected' : '' }}>Available</option>

<option value="checked_out" {{ $book->status=='checked_out' ? 'selected' : '' }}>Checked Out</option>

<option value="archived" {{ $book->status=='archived' ? 'selected' : '' }}>Archived</option>

</select>
</div>

<button class="btn btn-success">Update</button>

</form>

@endsection