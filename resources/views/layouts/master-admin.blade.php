<!DOCTYPE html>
<html lang="fr">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>@yield('title') | Digistos</title>
    @vite(['resources/scss/admin.scss', 'resources/js/app.js'])
</head>

<body>
    <main>
        @include('layouts.sidebar')
        @yield('content')
    </main>
</body>

</html>
