<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>@yield('title', 'Mi Proyecto Laravel')</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet">
    <style>
        .activo a {
            color: red;
            text-decoration: underline;
        }
        .inactivo a {
            color: #4682B4; /* azul */
            text-decoration: none;
        }
        .default a {
            color: #4682B4; /* azul por defecto */
            text-decoration: none;
        }
    </style>
</head>
<body>
    <nav>
        <table class="table table-bordered">
            <thead class="table">
                <tr>
                    <th scope="col" class="{{ request()->routeIs('home') ? 'activo' : (request()->routeIs('nosotros') || request()->routeIs('servicios') || request()->routeIs('contacto') ? 'inactivo' : 'default') }}"><a href="{{ route('home') }}">Home</a></th>
                    <th scope="col" class="{{ request()->routeIs('nosotros') ? 'activo' : (request()->routeIs('home') || request()->routeIs('servicios') || request()->routeIs('contacto') ? 'inactivo' : 'default') }}"><a href="{{ route('nosotros') }}">Nosotros</a></th>
                    <th scope="col" class="{{ request()->routeIs('servicios') ? 'activo' : (request()->routeIs('home') || request()->routeIs('nosotros') || request()->routeIs('contacto') ? 'inactivo' : 'default') }}"><a href="{{ route('servicios') }}">Servicios</a></th>
                    <th scope="col" class="{{ request()->routeIs('contacto') ? 'activo' : (request()->routeIs('home') || request()->routeIs('nosotros') || request()->routeIs('servicios') ? 'inactivo' : 'default') }}"><a href="{{ route('contacto') }}">Contacto</a></th>
                </tr>
            </thead>
        </table>
    </nav>
    <div class="container">
        @yield('content')
    </div>
</body>
</html>
