<!doctype html>
<html lang="es">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>@yield('title', 'Carnicería')</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet">
    <link href="/css/carniceria.css" rel="stylesheet">
  </head>
  <body>
    <nav class="navbar navbar-expand-lg navbar-light bg-white">
      <div class="container">
        <a class="navbar-brand d-flex align-items-center" href="/home"><span class="logo-mark"></span> Carnicería</a>
        <div>
          @auth
            <a class="btn btn-sm btn-outline-secondary" href="/logout">Cerrar sesión</a>
          @endauth
        </div>
      </div>
    </nav>

    <main class="py-4">
      @yield('content')
    </main>
  </body>
</html>
