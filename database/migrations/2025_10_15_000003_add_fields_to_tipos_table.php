<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    public function up()
    {
        Schema::table('tipos', function (Blueprint $table) {
            $table->text('descripcion')->nullable()->after('nombre');
            $table->string('unidad')->default('kg')->after('descripcion');
            $table->decimal('porcentaje_descuento',5,2)->nullable()->after('unidad');
            $table->boolean('activo')->default(true)->after('porcentaje_descuento');
        });
    }

    public function down()
    {
        Schema::table('tipos', function (Blueprint $table) {
            $table->dropColumn(['descripcion','unidad','porcentaje_descuento','activo']);
        });
    }
};
