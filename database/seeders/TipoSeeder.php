<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\Tipo;

class TipoSeeder extends Seeder
{
    public function run()
    {
        $tipos = ['Carne de res', 'Pollo', 'Embutidos', 'Pescado'];
        foreach ($tipos as $t) {
            Tipo::firstOrCreate(['nombre' => $t]);
        }
    }
}
