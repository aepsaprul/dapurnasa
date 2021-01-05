<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Produk extends Model
{
    protected $fillable = [
        'title',
        'varian',
        'kode',
        'ukuran',
        'stok',
        'harga',
        'deskripsi',
        'img',
        'link_btn',
        'kategori_id',
        'display'
    ];

    public function data_kategori()
    {
        return $this->belongsTo('App\Kategori');
    }
}
