@extends('layouts.app')

@section('style')
    
@endsection

@section('content')
<div class="section-title">
  <h2>KATEGORI</h2>
</div>

<div style="margin-bottom: 20px;">
  <a href="{{ route('kategori.create') }}" class="btn btn-primary">Tambah Data</a>
</div>

<div class="content">
  <table id="example" class="display responsive nowrap" style="width:100%; margin-left: 5px;">
    <thead>
        <tr>
            <th>Title</th>
            <th>Aksi</th>
        </tr>
    </thead>
    <tbody>
        @foreach ($kategoris as $key => $kategori)
        <tr>
            <td>{{ $kategori->title }}</td>
            <td>
                <a href="{{ route('kategori.edit', [$kategori->id]) }}">Edit</a> | 
                <a href="{{ route('kategori.delete', [$kategori->id]) }}" onclick="return confirm('Yakin akan hapus?')">Delete</a> 
            </td>
        </tr>
        @endforeach
    </tbody>
  </table>
</div>
@endsection

@section('script')
    
@endsection