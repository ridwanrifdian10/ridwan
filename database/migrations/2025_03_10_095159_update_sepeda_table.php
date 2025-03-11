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
        Schema::table('sepeda', function (Blueprint $table) {
            $table->integer('jumlah')->after('sewa'); 
            $table->dropColumn(['tipe', 'warna', 'status']);

            $table->integer('sewa')->after('merk')->change();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::table('sepeda', function (Blueprint $table) {
            $table->string('tipe'); 
            $table->string('warna'); 
            $table->string('status'); 
            $table->dropColumn('jumlah'); 
            
            
            $table->integer('sewa')->after('warna')->change();
        });
    }
};
