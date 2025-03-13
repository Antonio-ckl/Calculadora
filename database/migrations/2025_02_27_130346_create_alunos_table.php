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
        Schema::create('alunos', function (Blueprint $table) {
            $table->id();
            $table->string('email', 80)->nullable(false)->unique();
            $table->string('cpf', 12)->nullable(false)->unique();
            $table->string('rm',5)->nullable(false)->unique();
            $table->string('numero_da_escola', 5)->nullable(false);
            $table->string('senha',45)->nullable(false);
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('alunos');
    }
};
