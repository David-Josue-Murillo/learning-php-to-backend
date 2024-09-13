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
        Schema::create('usuarios__migration', function (Blueprint $table) {
            //
            $table->increments('id');
            $table->string('nombre', 100);
            $table->string('apellidos', 100);
            $table->string('email', 255);
            $table->string('contrasena', 255);
            $table->date('fecha');
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::table('usuarios', function (Blueprint $table) {
            //Schema::drop('usuarios');
        });
    }
};
