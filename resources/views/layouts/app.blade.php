<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Practice Website Build</title>
    <link rel="stylesheet" href="{{ asset('css/common.css') }}">
    <link href="https://cdn.jsdelivr.net/npm/remixicon@4.5.0/fonts/remixicon.css" rel="stylesheet" />
    @vite('resources/css/app.css')
</head>

<body>

    @include('layouts.header')


    @yield('content')


    @include('layouts.footer')


</body>

<script src={{ asset('js/common.js') }}></script>

</html>
