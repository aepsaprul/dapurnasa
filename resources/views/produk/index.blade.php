@extends('layouts.app')

@section('content')
<div class="section-title">
  <h2>PRODUK</h2>
</div>

<div style="margin-bottom: 20px;">
  <a href="{{ route('produk.create') }}" class="btn btn-primary">Tambah Data</a>
</div>

<div class="content">
  <table id="example" class="display responsive nowrap" style="width:100%; margin-left: 5px;">
    <thead>
        <tr>
            <th>Name</th>
            <th>Position</th>
        </tr>
    </thead>
    <tbody>
        @foreach ($produks as $key => $produk)
        <tr>
            <td>{{ $produk->title }}</td>
            <td>
                <a href="{{ route('produk.edit', [$produk->id]) }}">Edit</a> | 
                <a href="{{ route('produk.delete', [$produk->id]) }}" onclick="return confirm('Yakin akan hapus?')">Delete</a> 
            </td>
        </tr>
        @endforeach
    </tbody>
  </table>
</div>
@endsection