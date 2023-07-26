<!DOCTYPE html>
<html lang="pt-BR" data-bs-theme="dark">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>{{ $title }} - TaskManager </title>
    <link rel="stylesheet" href="{{ asset('css/app.css') }}">
</head>
<div class="container">

    <body class="container bg-dark text-white p-4">
        <h1>{{ $title }}</h1>

        {{ $slot }}
    </body>
</div>

</html>
