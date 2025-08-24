<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <!-- <title>@yield('title', 'Students CURD')</title> -->
    <title>
        @hasSection('title')
            @yield('title') | Students CURD
        @else
            Students CURD
        @endif
    </title>
    @vite(['resources/sass/app.scss', 'resources/js/app.js'])
</head>

<body class="bg-dark">
    <div id="app">
        @yield('content')
    </div>

</body>

</html>