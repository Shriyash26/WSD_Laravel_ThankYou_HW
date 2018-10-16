<!doctype html>
<html lang="en">
<head>
    @include('includes.head')
</head>
<header>
    @include('includes.header')
</header>
<body>

<main role="main">
    @yield('content')
</main>
@include('includes.footer')
@include('includes.jsfooter')
</body>
</html>