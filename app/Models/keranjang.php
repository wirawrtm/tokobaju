<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class keranjang extends Model
{
    public function produk()
    {
        return $this->belongsTo(produk::class, 'idbarang');
    }
    

}
