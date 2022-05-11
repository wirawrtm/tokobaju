<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class produk extends Model
{
    use HasFactory;
    public function keranjang()
    {
        return $this->hasManyThrough(keranjang::class, checkout::class);
    }
}

