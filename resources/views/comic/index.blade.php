@extends('layout.app')

@section('page.title')
    Elenco Comics
@endsection

@section('page.main')
<div class="container">
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
            <td><a href="{{ route('comics.show', $comic->id) }}" class="btn btn-primary btn-sm">Dettagli</a></td>
          </tr>
        </tbody>
        @endforeach
    </table>
</div>
@endsection