<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Product extends Model
{
    use HasFactory;

    protected $table = 'product';
    protected $primaryKey = 'id_product';

    protected $fillable = [
        'id_product',
        'foto',
        'nama_product',
        'merk',
        'harga_beli',
        'harga_jual',
        'stok',
        ];
       
}
