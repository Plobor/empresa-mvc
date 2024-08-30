<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     */
    public function up(): void
    {
        Schema::create('products', function (Blueprint $table) {
            $table->id(); // Crea una columna 'id' con incremento automático
            $table->string('nombre', 50)->nullable(); // Columna para el nombre del producto
            $table->text('descripcion')->nullable(); // Columna para la descripción del producto
            $table->decimal('pvp', 10, 2)->default(0.00); // Columna para el precio de venta con 2 decimales
            $table->string('tipo', 30)->nullable(); // Columna para el tipo de producto
            $table->timestamps(); // Crea columnas 'created_at' y 'updated_at'
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('products');
    }
};
