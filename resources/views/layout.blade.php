<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>MVC Project</title>

    @yield('head')

    <link href="https://fonts.googleapis.com/css?family=Lato:100" rel="stylesheet" type="text/css">
    <link href="{{ URL::asset('sass/app.sass') }}" rel="stylesheet" type="text/css">
</head>
<body>

@yield('content')

@yield('footer')

</body>
</html>
