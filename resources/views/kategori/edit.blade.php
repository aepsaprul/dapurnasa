@extends('layouts.app')

@section('content')

<div class="section-title">
  <h2>UBAH KATEGORI</h2>
</div>

<form action="{{ route('kategori.update', [$kategori->id]) }}" method="POST">
  @method('PUT')
  @csrf
  <div class="form-group">
    <label for="name">Nama Kategori</label>
    <input type="text" class="form-control" name="title" id="title" value="{{ $kategori->title }}" />
  </div>
  <div class="text-center"><button type="submit" class="btn btn-primary">Simpan</button></div>
</form>

@endsection