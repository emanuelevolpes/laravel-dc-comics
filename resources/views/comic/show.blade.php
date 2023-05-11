@extends('layout.app')

@section('page.title')
    {{ $comic->title }}
@endsection

@section('page.main')
<div class="container">
    <div class="my-3"><a href="{{ route('comics.index') }}" class="btn btn-primary btn-sm">Torna all'elenco</a></div>
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