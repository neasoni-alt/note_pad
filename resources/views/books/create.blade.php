@extends('books.layout')

@section('content')

<h2>Add Book</h2>

@if ($errors->any())
<div class="alert alert-danger">
<ul>
@foreach ($errors->all() as $error)
<li>{{ $error }}</li>
@endforeach
</ul>
</div>
@endif

<form action="{{ route('books.store') }}" method="POST">
@csrf

<div class="mb-3">
<label>Title</label>
<input type="text" name="title" class="form-control" value="{{ old('title') }}">
</div>

<div class="mb-3">
<label>Author</label>
<input type="text" name="author" class="form-control" value="{{ old('author') }}">
</div>

<div class="mb-3">
<label>ISBN</label>
<input type="text" name="isbn" class="form-control" value="{{ old('isbn') }}">
</div>

<div class="mb-3">
<label>Genre</label>
<input type="text" name="genre" class="form-control" value="{{ old('genre') }}">
</div>

<div class="mb-3">
<label>Published Year</label>
<input type="number" name="published_year" class="form-control">
</div>

<div class="mb-3">
<label>Status</label>
<select name="status" class="form-control">
<option value="available">Available</option>
<option value="checked_out">Checked Out</option>
<option value="archived">Archived</option>
</select>
</div>

<button type="submit" class="btn btn-success">Submit</button>

</form>

@endsection