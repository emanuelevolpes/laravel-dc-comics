@extends('layout.app')

@section('page.title')
    Elenco Comics
@endsection

@section('page.main')
    @foreach ($comics as $comic)
        <li>{{ $comic->title }}</li>
    @endforeach
@endsection