<!DOCTYPE html>
<html lang="en">
<head>
	@include('layouts.head')
	<title>@yield('title')</title>
</head>
<body>

    <div class="flex-center position-ref full-height">
        <div class="content">
          

            <div class="links">
                <a href="{{route('proyectos')}}">Proyectos</a>
                <a href="{{route('empleados')}}">Empleados</a>
                <a href="{{route('departamentos')}}">Departamentos</a>
            </div>
            <hr><br><br>
            <div class="op">
                @yield('content')
            </div>
        </div>
    </div>

	<footer class="footer">
		@include('layouts.footer')
	</footer>

</body>
</html>