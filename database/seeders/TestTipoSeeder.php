<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\Tipo;

class TestTipoSeeder extends Seeder
{
    public function run()
    {
        Tipo::create([
            'nombre' => 'Tipo Prueba 123',
            'descripcion' => 'Descripción de prueba desde TestTipoSeeder',
            'unidad' => 'kg',
            'porcentaje_descuento' => 2.5,
            'activo' => true,
        ]);
    }
}
