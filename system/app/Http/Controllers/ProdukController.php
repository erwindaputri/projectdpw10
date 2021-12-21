<?php

namespace App\Http\Controllers;
use App\Models\Produk;
use App\Models\User;

class ProdukController extends Controller {
    function index(){
        $user = request()->user();
        $data['list_produk'] =$user->produk;
        return view('produk.index', $data);
    }

    function create(){
        return view('produk.create'); 
    }
    function store(){
        $produk = new Produk;
        $produk->id_user =  request()->user()->id;
        $produk->nama = request('nama');
        $produk->harga = request('harga');
        $produk->berat = request('berat');
        $produk->stok = request('stok');
        $produk->deskripsi = request('deskripsi');
        $produk->handleUploadFoto();
        $produk->save();

        

        return redirect('admin/produk')->with('success', 'Data Berhasil Ditambahkan');

    }
    function show($produk){
        $data['produk'] = Produk::find($produk);
        return view('produk.show', $data);
    }
    function edit(Produk $produk){
        $data['produk'] = $produk;
        return view('produk.edit', $data);         
    }
    function update(Produk $produk){
        $produk->nama = request('nama');
        $produk->harga = request('harga');
        $produk->foto = request('foto');
        $produk->berat = request('berat');
        $produk->stok = request('stok');
        $produk->deskripsi = request('deskripsi');
        $produk->handleUploadFoto();
        $produk->save();

        return redirect('admin/produk')->with('success', 'Data Berhasil Diedit');

    }
    function destroy(Produk $produk){
        $produk->handleDelete();
        $produk->delete();
        
        return redirect('admin/produk')->with('danger', 'Data Berhasil Dihapus');

    }

    function filter(){
        $nama = request('nama');
        $stock = explode(",", request('stock'));
        $data['$hargaMin'] = $hargaMin = request('hargaMin');
        $data['$hargaMax'] = $hargaMax = request('hargaMax');
        $data['list_produk'] = Produk::where('nama', 'like', "%$nama%")->get();
        // $data['list_produk'] = Produk::whereIn('stock', $stock)->get();
        // $data['list_produk'] = Produk::whereBetween('harga', [$hargaMin, $hargaMax])->get();
        // $data['list_produk'] = Product::where('stock', '<>', $stock)->get();
        // $data['list_produk'] = Product::whereNotIn('stock', $stock)->get();
        // $data['list_produk'] = Product::whereNotBetween('harga', [$hargaMin, $hargaMax])->get();
        // $data['list_produk'] = Product::whereNull('stock', $stock)->get();
        // $data['list_produk'] = Product::whereNotNull('stock', $stock)->get();
        $data['nama'] = $nama;
        $data['stock'] = request('stock');

        return view('produk.index', $data);
    }
}