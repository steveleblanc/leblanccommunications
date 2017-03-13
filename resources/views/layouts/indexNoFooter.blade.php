<!DOCTYPE html>
<html>
<head>
@include('includes.head')
</head>
<body>
@include('includes.navbar')
<div class="stretch">
@if ($flash =session('message'))
<div class = "alert alert-success bottomRight" role="alert" id="flash">	
	{{ $flash }}
</div>
@endif
@yield('content')
</div>
</body>
</html>