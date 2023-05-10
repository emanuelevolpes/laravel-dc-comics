<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Dc Comics</title>
    @vite('resources/js/app.js')
</head>
<body>
    <header>
        <h1 class="text-center py-4">@yield('page.title')</h1>
    </header>
    <main>
        @yield('page.main')
    </main>
    <footer></footer>
</body>
</html>