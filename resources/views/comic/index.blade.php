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
          </tr>
        </thead>
    
        @foreach ($comics as $comic)
        <tbody>
          <tr>
            <td>{{ $comic->series }}</td>
            <td>{{ $comic->price }}</td>
            <td>{{ $comic->type }}</td>
          </tr>
        </tbody>
        @endforeach
    </table>
</div>
@endsection