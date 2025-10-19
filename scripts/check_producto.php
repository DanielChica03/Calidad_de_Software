<?php
require __DIR__ . '/../vendor/autoload.php';
$app = require_once __DIR__ . '/../bootstrap/app.php';
$kernel = $app->make(Illuminate\Contracts\Console\Kernel::class);
$kernel->bootstrap();

use App\Models\Tipo;
use App\Models\Producto;

$tipo = Tipo::first();
if (!$tipo) {
    echo "No hay tipos definidos.\n";
    exit(1);
}

$producto = Producto::create([
    'nombre' => 'Prod Test Auto',
    'descripcion' => '',
    'precio' => 123.45,
    'tipo_id' => $tipo->id,
]);

$producto = Producto::with('tipo')->find($producto->id);
echo "Producto creado id={$producto->id}\n";
echo "nombre={$producto->nombre}\n";
echo "descripcion={$producto->descripcion}\n";
echo "tipo.descripcion={$producto->tipo->descripcion}\n";
