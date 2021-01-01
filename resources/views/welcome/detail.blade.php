@extends('welcome')

@section('content')

<div style="background: #37517e; height: 150px;">
  <h4 style="padding: 100px 20px 0px 20px; color: #fff;">DETAIL PRODUK</h4>
</div>

<section class="detail">
  <div>
    <img src="{{ asset('storage/' . $produk->img) }}" alt="grece">
  </div>
  <div>
    <div class="box-harga">
      <div>
        <span class="harga">Harga <span style="color: red;">Rp. {{ rupiah($produk->harga) }}</span></span>
      </div>
      <hr>
      <div>
        <span class="netto">Netto: {{ $produk->ukuran }}</span>
      </div>
      <div>
        <span class="stok">Stok: {{ $produk->stok }}</span>
      </div>
      <div class="box-beli">
        <a href="https://wa.me/6285728012440?text={{ $produk->link_btn }}">BELI</a>
      </div>
    </div>
  </div>
  <div>
    {!! $produk->deskripsi !!}
  </div>
</section>

@endsection