@extends('books.layout')

@section('content')

<div class="d-flex justify-content-between mb-3">
<h2>Book List</h2>
<a href="{{ route('books.create') }}" class="btn btn-primary">Add Book</a>
</div>

@if ($message = Session::get('success'))
<div class="alert alert-success">{{ $message }}</div>
@endif

<table class="table table-bordered">
<tr>
<th>Title</th>
<th>Author</th>
<th>ISBN</th>
<th>Genre</th>
<th>Year</th>
<th>Status</th>
<th width="220px">Action</th>
</tr>

@forelse ($books as $book)
<tr>
<td>{{ $book->title }}</td>
<td>{{ $book->author }}</td>
<td>{{ $book->isbn }}</td>
<td>{{ $book->genre }}</td>
<td>{{ $book->published_year }}</td>
<td>
@if($book->status=='available')
<span class="badge bg-success">Available</span>
@elseif($book->status=='checked_out')
<span class="badge bg-warning">Checked Out</span>
@else
<span class="badge bg-danger">Archived</span>
@endif
</td>

<td>
<a class="btn btn-info btn-sm" href="{{ route('books.show',$book->id) }}">Show</a>

<a class="btn btn-primary btn-sm" href="{{ route('books.edit',$book->id) }}">Edit</a>

<form action="{{ route('books.destroy',$book->id) }}" method="POST" style="display:inline">
@csrf
@method('DELETE')

<button type="submit" class="btn btn-danger btn-sm">Delete</button>
</form>

</td>
</tr>

@empty
<tr>
<td colspan="7">No books found</td>
</tr>
@endforelse

</table>

{{ $books->links() }}

@endsection