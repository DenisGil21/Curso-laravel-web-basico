<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>@yield('title')</title>
    {{-- <script src="https://cdn.tailwindcss.com/"></script> --}}
    <style>
        .active{
            color: red;
            font-weight: bold;
        }
    </style>
</head>

<body>
    @include('layouts.shared.header')
    @yield('content')

    @include('layouts.shared.footer')
</body>

</html>
