<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Kategori extends Model
{
    protected $fillable = [
        'title'
    ];

    public function data_produk()
    {
        return $this->hasMany('App\Produk');
    }
}
