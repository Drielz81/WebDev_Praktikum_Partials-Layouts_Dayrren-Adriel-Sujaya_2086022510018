<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>@yield('title', 'Dayyy')</title>
    @vite('resources/css/app.css')
</head>

<body class="flex min-h-dvh flex-col">
    <div class="relative bg-no-repeat bg-center bg-cover z-50 before:absolute before:inset-0 before:bg-black/70"
        style="background-image: url('{{ asset('bg_image1.jpg') }}');">
        @include('partials.navbar')

        @yield('content')
    </div>

    @include('partials.footer')
</body>

</html>
