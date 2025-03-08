<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class Pelanggan extends Model
{
    use HasFactory;
    protected $table = 'pelanggan';
    protected $primaryKey = 'idCustomer';
    protected $fillable = [
        'nama',
        'alamat',
        'noTelp',
        'email',
    ];

    public function transaksi() {
        return $this->hasMany(Transaksi::class, 'idCustomer');
    }
}
