<?php

namespace App\Http\Controllers;

class HomeController extends Controller{

    Function showhome(){
        return view('toko.index');
    }

    Function showabout(){
        return view('toko.about');
    }

    Function showcontact(){
        return view('toko.contact');
    }

    Function showproduct(){
        return view('toko.vegetables');
    }

    Function showdashboard(){
        return view('backview.dashboard');
    }

    Function showkategori(){
        return view('backview.kategori');
    }

    Function showproduk(){
        return view('backview.produk');
    }

    function test($produk, $hargaMin = 0, $hargaMax = 0){
        if($produk == 'Tomat'){
            echo "Tampilkan Produk Tomat";
        }elseif($produk == 'kentang'){
            echo "Produk Kentang";
        }       

        echo "/br";
        echo "Harga Min adalah $hargaMin <br>";
        echo "Harga Mix adalah $hargaMix <br>";
    }
}