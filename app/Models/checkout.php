<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class checkout extends Model
{
    use HasFactory;
    protected $fillable = ['iduser', 'idbarang', 'idbuyer', 'jumlah', 'ukuran', 'detail', 'keterangan'];

    public function produk()
    {
        return $this->belongsTo(produk::class, 'idbarang');
    }

}
