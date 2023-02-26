<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
    {{-- fontawesome --}}
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.3.0/css/all.min.css">
    @vite('resources/js/app.js', 'resources/scss/app.scss')
</head>

<body>
    <div>
        @include('partials.header')
    </div>
    <div>
        @yield('content')
    </div>
    <div>
        @include('partials.footer')
    </div>
</body>

</html>
