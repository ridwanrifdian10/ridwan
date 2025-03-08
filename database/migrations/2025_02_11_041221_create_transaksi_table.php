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
        Schema::create('transaksi', function (Blueprint $table) {
            $table->id('idRental');
            $table->unsignedBigInteger('idCustomer');
            $table->unsignedBigInteger('idSepeda');
            $table->date('tanggalSewa');
            $table->date('tanggalKembali');
            $table->integer('totalBiaya');
            $table->string('status');
            $table->timestamps();

            $table->foreign('idCustomer')->references('idCustomer')->on('pelanggan')->onDelete('cascade');
            $table->foreign('idSepeda')->references('idSepeda')->on('sepeda')->onDelete('cascade');
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::table('transaksi', function(Blueprint $table){
            $table->dropForeign(['idCustomer']);
            $table->dropForeign(['idSepeda']);
        });
        Schema::dropIfExists('transaksi');
    }
};
