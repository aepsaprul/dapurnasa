@extends('layouts.app')

@section('style')
  <link href="https://stackpath.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap.min.css" rel="stylesheet">
@endsection

@section('content')

<div class="section-title">
  <h2>TAMBAH PRODUK</h2>
</div>

<form action="{{ route('produk.store') }}" method="POST" enctype="multipart/form-data">
  @csrf
  <div class="form-group">
    <label for="title">Title</label>
    <input type="text" class="form-control" name="title" id="title" />
  </div>
  <div class="form-group">
    <label for="varian">Varian</label>
    <input type="text" class="form-control" name="varian" id="varian" />
  </div>
  <div class="form-group">
    <label for="kode">Kode</label>
    <input type="text" class="form-control" name="kode" id="kode" />
  </div>
  <div class="form-group">
    <label for="kategori">Kategori</label>
    <select name="kategori_id" id="kategori" class="form-control">
      <option value="0">--Pilih Kategori--</option>
      @foreach ($kategoris as $kategori)
        <option value="{{ $kategori->id }}">{{ $kategori->title }}</option>
      @endforeach
    </select>
  </div>
  <div class="form-group">
    <label for="ukuran">Ukuran</label>
    <input type="text" class="form-control" name="ukuran" id="ukuran" placeholder="ukuran dalam gram" />
  </div>
  <div class="form-group">
    <label for="stok">Stok</label>
    <input type="text" class="form-control" name="stok" id="stok" />
  </div>
  <div class="form-group">
    <label for="harga">Harga</label>
    <input type="text" class="form-control" name="harga" id="harga" />
  </div>
  <div class="form-group">
    <label for="link_btn">Link Tombol</label>
    <input type="text" class="form-control" name="link_btn" id="link_btn" />
  </div>  
  <div class="form-group">
    <label for="img">Gambar</label>
    <input type="file" class="form-control" name="img" id="img" />
  </div>
  <div class="form-group">
    <label for="deskripsi">Deskripsi</label>
    <textarea id="summernote" name="deskripsi"></textarea>
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