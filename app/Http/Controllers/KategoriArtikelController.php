<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\KategoriArtikel;
class KategoriArtikelController extends Controller
{
     public function index()
    {
        $kategori_artikel=KategoriArtikel::all();
        
        return view('kategori_artikel.index',compact('kategori_artikel'));
    }
}
