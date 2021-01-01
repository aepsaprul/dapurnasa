@extends('layouts.app')

@section('content')

<div class="section-title">
  <h2>TAMBAH KATEGORI</h2>
</div>

<form action="{{ route('kategori.store') }}" method="POST">
  @csrf
  <div class="form-group">
    <label for="name">Nama Kategori</label>
    <input type="text" class="form-control" name="title" id="title" />
  </div>
  <div class="text-center"><button type="submit" class="btn btn-primary">Simpan</button></div>
</form>

@endsection