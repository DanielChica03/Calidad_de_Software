@extends('layouts.simple')

@section('title', 'Inicio - Carnicería')

@section('content')
  <div class="container py-5">
    <div class="row align-items-center">
      <div class="col-12 text-center mb-4">
        <h1 class="display-5"><span class="logo-mark"></span> Carnicería</h1>
        <p class="lead text-muted">Administra productos y tipos de producto de forma sencilla</p>
      </div>

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
@endsection
