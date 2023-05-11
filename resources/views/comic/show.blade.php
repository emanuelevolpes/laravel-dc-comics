@extends('layout.app')

@section('page.title')
    {{ $comic->title }}
@endsection

@section('page.main')
    <div class="container">
        <div class="my-3">
            <a href="{{ route('comics.index') }}" class="btn btn-primary btn-sm">Torna all'elenco</a>
            <a href="{{ route('comics.edit', $comic->id) }}" class="btn btn-info btn-sm">Edit</a>
            <div class="d-inline-block">
                <form action="{{ route('comics.destroy', $comic->id) }}" method="POST">
                    @csrf
                    @method('DELETE')
                    <input type="submit" value="Delete" class="btn btn-danger btn-sm"
                        onclick="return confirm('Are you shure to delete this Comic?')">
                </form>
            </div>
        </div>
        <h2>Desctiption</h2>
        <p>{{ $comic->description }}</p>
        <hr>
        <img src="{{ $comic->thumb }}" alt="thumb" style="width: 200px">
        <hr>
        <div>
            <ul>
                <li><strong>Price:</strong> {{ $comic->price }}</li>
                <li><strong>Series:</strong> {{ $comic->series }}</li>
                <li><strong>Sale date:</strong> {{ $comic->sale_date }}</li>
                <li><strong>Type:</strong> {{ $comic->type }}</li>
            </ul>
        </div>
        <hr>
        <div>
            <p>{{ $comic->artists }}</p>
        </div>
        <hr>
    </div>
@endsection
