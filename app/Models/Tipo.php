<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Tipo extends Model
{
    use HasFactory;

    protected $fillable = ['nombre', 'descripcion', 'unidad', 'porcentaje_descuento', 'activo'];

    protected $casts = [
        'activo' => 'boolean',
        'porcentaje_descuento' => 'float',
    ];

    public function productos()
    {
        return $this->hasMany(Producto::class);
    }
}
