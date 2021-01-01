<?php

namespace App\Http\Controllers;

use App\Produk;
use App\Kategori;
use Illuminate\Http\Request;

class ProdukController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $produks = Produk::orderBy('id', 'desc')->get();

        return view('produk.index', ['produks' => $produks]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $kategoris = Kategori::get();
        return view('produk.create', ['kategoris' => $kategoris]);
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $produks = new Produk;
        $produks->title = strtoupper($request->get('title'));
        $produks->varian = strtoupper($request->get('varian'));
        $produks->kode = strtoupper($request->get('kode'));
        $produks->ukuran = $request->get('ukuran');
        $produks->stok = $request->get('stok');
        $produks->harga = $request->get('harga');
        $produks->link_btn = $request->get('link_btn');
        $produks->deskripsi = $request->get('deskripsi');
        $produks->kategori_id = $request->get('kategori_id');
        
        if($request->file('img')){
            $file = $request->file('img')->store('imgs', 'public');
            $produks->img = $file;
        }

        $produks->save();

        $request->session()->flash('status', 'Data berhasil disimpan');

        return redirect()->route('produk.index');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $produk = Produk::find($id);
        $kategoris = Kategori::get();

        return view('produk.edit', ['produk' => $produk, 'kategoris' => $kategoris]);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        $produk = Produk::find($id);
        $produk->title = strtoupper($request->title);
        $produk->varian = strtoupper($request->varian);
        $produk->kode = strtoupper($request->kode);
        $produk->ukuran = $request->ukuran;
        $produk->stok = $request->stok;
        $produk->harga = $request->harga;
        $produk->link_btn = $request->link_btn;
        $produk->deskripsi = $request->deskripsi;
        $produk->kategori_id = $request->kategori_id;

        if($request->file('img')){
            if($produk->img && file_exists(storage_path('app/public/' . $produk->img))){
            \Storage::delete('public/'.$produk->img);
          }
          $file = $request->file('img')->store('imgs', 'public');
          $produk->img = $file;
        }

        $produk->save();

        return redirect()->route('produk.index');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
    }

    public function delete(Request $request, $id)
    {
        $produk = Produk::find($id);
        
        $produk->delete();

        $request->session()->flash('status', 'Data berhasil dihapus');
        
        return redirect()->route('produk.index');
    }
}
