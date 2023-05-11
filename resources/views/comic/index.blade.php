@extends('layout.app')

@section('page.title')
    Comics list
@endsection

@section('page.main')
<div class="container">
  <div class="text-center">
    <a href="{{ route('comics.create') }}" class="btn btn-success">Create new Comic</a>
  </div>
    <table class="table">
        <thead>
          <tr>
            <th scope="col">Series</th>
            <th scope="col">Price</th>
            <th scope="col">Type</th>
            <th scope="col">Action</th>
          </tr>
        </thead>
    
        @foreach ($comics as $comic)
        <tbody>
          <tr> 
            <td>{{ $comic->series }}</td>
            <td>{{ $comic->price }}</td>
            <td>{{ $comic->type }}</td>
            <td>
              <a href="{{ route('comics.show', $comic->id) }}" class="btn btn-primary btn-sm">Details</a>
              <a href="{{ route('comics.edit', $comic->id) }}" class="btn btn-primary btn-sm">Edit</a>
              <form action="{{ route('comics.destroy', $comic->id )}}" method="POST">
              @csrf
              @method('DELETE')
              <input type="submit" value="Delete" class="btn btn-danger btn-sm">
              </form>
            </td>
          </tr>
        </tbody>
        @endforeach
    </table>
    <div class="text-center my-3">
      <a href="{{ route('home') }}" class="btn btn-danger">Back to Home page</a>
    </div>
</div>
@endsection