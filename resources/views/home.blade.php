<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <title>Laravel Dc Comics</title>
         @vite('resources/js/app.js')
    </head>
    <body>
        <div class="container text-center">
            <h1>This is the Home page</h1>
            <a href="{{ route('comics.index') }}" class="btn btn-primary">Go to Comics list</a>
        </div>
    </body>
</html>
