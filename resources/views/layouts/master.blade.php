<!doctype html>
<html>
<head>
    <title>@yield('title', 'Project-3')</title>
    <meta charset='utf-8'>
    <link href='/css/project3.css' type='text/css' rel='stylesheet'>

    @stack('head')
</head>
<body>

<header>

</header>

<section>
    @yield('content')
</section>

<footer>
    &copy; {{ date('Y') }}
</footer>



@stack('body')

</body>
</html>