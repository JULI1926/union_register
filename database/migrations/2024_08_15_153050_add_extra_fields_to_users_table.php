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
        Schema::table('users', function (Blueprint $table) {
            $table->string('tipo_documento')->nullable();
            $table->string('documento')->nullable();
            $table->string('telefono')->nullable();
            $table->string('fecha_ingreso')->nullable(); 
            $table->string('empresa')->nullable();             
            $table->string('cargo')->nullable();            
                      
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::table('users', function (Blueprint $table) {
            $table->dropColumn('tipo_documento');
            $table->dropColumn('documento');
            $table->dropColumn('telefono');
            $table->dropColumn('fecha_ingreso');
            $table->dropColumn('empresa');
            $table->dropColumn('cargo');            
        });
    }
};
