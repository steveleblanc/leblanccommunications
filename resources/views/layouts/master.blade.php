<!doctype html>
<html>
<head>
    @include('includes.head')
</head>
<body>
@include('includes.navbar')
<div class="stretch">
@yield('content')
@include('includes.footer')
</div>
</body>
</html>