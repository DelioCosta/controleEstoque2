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
        Schema::create('produto', function (Blueprint $table) {
            $table->id();
            $table->string('descricao');
            $table->string('referencia');
            $table->string('fabricante');
            $table->string('marca');
            $table->string('obs');
            $table->string('unidade');
            $table->decimal('valor_compra',9,2);
            $table->decimal('valor_venda',9,2);
            $table->integer('estoque_minimo');
            $table->timestamps();
            $table->softDeletes();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('produto');
    }
};
