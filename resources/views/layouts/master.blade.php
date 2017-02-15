<!doctype html>
<html>
<head>
    @include('includes.head')
</head>
<body>
        @include('includes.header')




<div class="container">
    <div class="row">  
        @yield('content')
    </div>
</div>

    <footer class="row">
        @include('includes.footer')
    </footer>

</body>
</html>