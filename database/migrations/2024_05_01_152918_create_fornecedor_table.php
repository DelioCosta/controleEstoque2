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
        Schema::create('fornecedor', function (Blueprint $table) {
            $table->id();
            $table->string('nome');
            $table->string('cpf');
            $table->string('cnpj');
            $table->string('telefone');
            $table->string('email');
            $table->string('cep');
            $table->string('endereco');
            $table->integer('numero');
            $table->string('bairro');
            $table->string('estado');
            $table->string('cidade');
            $table->string('complemento');
            $table->string('nome_contato');
            $table->timestamps();
            $table->softDeletes();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('fornecedor');
    }
};
