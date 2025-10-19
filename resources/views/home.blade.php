<!doctype html>
<html lang="es">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Inicio - Carnicería</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet">
    <style>
      body { background: linear-gradient(180deg,#ffffff,#f1f6ff); }
      .card { border-radius: 12px; box-shadow: 0 6px 20px rgba(2,6,23,0.06); }
      .hero { padding: 48px 24px; }
    </style>
  </head>
  <body>
    <div class="container hero">
      <div class="row justify-content-center">
        <div class="col-12 col-md-10 col-lg-8 text-center">
          <h1 class="mb-3">Bienvenido a la Carnicería</h1>
          <p class="text-muted mb-4">Selecciona una opción para ver los registros.</p>
          <div class="col-12 d-flex justify-content-center gap-3">
            <a href="/productos" class="btn btn-primary btn-lg px-4">
              <svg xmlns="http://www.w3.org/2000/svg" width="20" height="20" fill="currentColor" class="bi bi-box-seam me-2" viewBox="0 0 16 16">
                <path d="M8.186 1.113a.5.5 0 0 0-.372 0L1.83 3.583 8 6.08l6.17-2.497-5.984-2.47z"/>
                <path d="M8 7.5 1.5 4.8v6.7L8 14.9l6.5-3.4V4.8L8 7.5z"/>
              </svg>
              Ver Productos
            </a>
            <a href="/tipos" class="btn btn-outline-dark btn-lg px-4">
              <svg xmlns="http://www.w3.org/2000/svg" width="20" height="20" fill="currentColor" class="bi bi-tags me-2" viewBox="0 0 16 16">
                <path d="M3 2.5a1 1 0 0 1 1-1h4.293a1 1 0 0 1 .707.293L14.707 7.5a1 1 0 0 1 0 1.414l-5.5 5.5A1 1 0 0 1 8.5 14H4a1 1 0 0 1-1-1V2.5z"/>
                <path d="M5 6a1 1 0 1 0 0-2 1 1 0 0 0 0 2z"/>
              </svg>
              Ver Tipos de Producto
            </a>
          </div>
        </div>
      </div>
    </div>
  </body>
</html>
