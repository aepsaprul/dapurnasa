@extends('layouts.app')

@section('style')
  <link href="https://stackpath.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap.min.css" rel="stylesheet">
@endsection

@section('name')

@endsection

@section('content')

<div class="section-title">
  <h2>UBAH PRODUK</h2>
</div>

<form action="{{ route('produk.update', [$produk->id]) }}" method="POST" enctype="multipart/form-data">
    @method('PUT')
    @csrf
  <div class="form-group">
    <label for="title">Title</label>
    <input type="text" class="form-control" name="title" id="title" value="{{ $produk->title }}" />
  </div>
  <div class="form-group">
    <label for="varian">Varian</label>
    <input type="text" class="form-control" name="varian" id="varian" value="{{ $produk->varian }}" />
  </div>
  <div class="form-group">
    <label for="kode">Kode</label>
    <input type="text" class="form-control" name="kode" id="kode" value="{{ $produk->kode }}" />
  </div>
  <div class="form-group">
    <label for="kategori">Kategori</label>
    <select name="kategori_id" id="kategori" class="form-control">
      <option value="0">--Pilih Kategori--</option>
      @foreach ($kategoris as $kategori)
        <option value="{{ $kategori->id }}" {{ $kategori->id == $produk->kategori_id ? 'selected' : '' }}>{{ $kategori->title }}</option>
      @endforeach
    </select>
  </div>
  <div class="form-group">
    <label for="ukuran">Ukuran dalam gram</label>
    <input type="text" class="form-control" name="ukuran" id="ukuran" value="{{ $produk->ukuran }}" />
  </div>
  <div class="form-group">
    <label for="stok">Stok</label>
    <input type="text" class="form-control" name="stok" id="stok" value="{{ $produk->stok }}" />
  </div>
  <div class="form-group">
    <label for="harga">Harga</label>
    <input type="text" class="form-control" name="harga" id="harga" value="{{ $produk->harga }}" />
  </div>
  <div class="form-group">
    <label for="link_btn">Link Tombol</label>
    <input type="text" class="form-control" name="link_btn" id="link_btn" value="{{ $produk->link_btn }}" />
  </div>

  <br>
  @if($produk->img)
    <img src="{{asset('storage/'.$produk->img)}}" width="120px" />
    <br>
  @else
    Gambar Kosong
  @endif
  <br>  
  <div class="form-group">
    <label for="img">Gambar</label>
    <input type="file" class="form-control" name="img" id="img" />
  </div>
  <small class="text-muted">Kosongkan jika tidak ingin mengubah avatar</small>

  <div class="form-group">
    <label for="deskripsi">Deskripsi</label>
    <textarea id="summernote" name="deskripsi">{{ $produk->deskripsi }}</textarea>
  </div>
  
  <div class="form-group">
    <label for="display">Tampil</label>
    <select name="display" id="display" class="form-control">
      <option value="">--Tampilkan--</option>
      <option value="0" {{ $produk->display == 0 ? 'selected' : '' }} >Tidak</option>
      <option value="1" {{ $produk->display == 1 ? 'selected' : '' }} >Ya</option>
    </select>
  </div>

  <div class="text-center"><button type="submit" class="btn btn-primary">Simpan</button></div>
</form>

@endsection

@section('script')
<script src="https://stackpath.bootstrapcdn.com/bootstrap/3.4.1/js/bootstrap.min.js"></script>
<script>
  $(document).ready(function() {
      $('#summernote').summernote({
          height: 200
      });
  });
</script>
@endsection