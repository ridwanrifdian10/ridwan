<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class Transaksi extends Model
{
    use HasFactory;
    protected $table = 'transaksi';
    protected $primaryKey = 'idRental';
    protected $fillable = [
        'idCustomer',
        'idSepeda',
        'tanggalSewa',
        'tanggalKembali',
        'totalBiaya',
        'status',
    ];

    public function pelanggan() {
        return $this->belongsTo(Pelanggan::class, 'idCustomer');
    }

    public function sepeda() {
        return $this->belongsTo(Sepeda::class, 'idSepeda');
    }
}
