<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>

    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Montserrat:wght@100;300;600;900&display=swap" rel="stylesheet">

    <link rel="stylesheet" href="{{ url('css/app.css') }}">
</head>
<body class='h-screen w-full font-montserrat'>
    @include('partials.navigation-top')

    @yield('content')
    </header>
</body>
</html>
