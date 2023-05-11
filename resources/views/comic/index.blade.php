@extends('layout.app')

@section('page.title')
    Comics list
@endsection

@section('page.main')
    <div class="container">
        <div class="text-center mb-3">
            <a href="{{ route('comics.create') }}" class="btn btn-success">Create new Comic</a>
            <a href="{{ route('home') }}" class="btn btn-danger">Back to Home page</a>
        </div>
        <div class="d-flex p-4">
          <div class="row gap-3 justify-content-center align-items-center">
            @foreach ($comics as $comic)
                <div class="card p-3 col-3 align-items-center text-center" style="height: 450px">
                    <img src="{{ $comic->thumb }}" class="card-img-top" alt="thumb" style="width: 200px">
                    <div class="card-body">
                        <h5 class="card-title">{{ $comic->title }}</h5>
                        <a href="{{ route('comics.show', $comic->id) }}" class="btn btn-primary btn-sm">Details</a>
                    </div>
                </div>
            @endforeach
        </div>
        </div>
    </div>
@endsection
