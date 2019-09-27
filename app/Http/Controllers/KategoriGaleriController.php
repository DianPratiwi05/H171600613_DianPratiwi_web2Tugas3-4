<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\KategoriGaleri;
class KategoriGaleriController extends Controller
{
     public function index()
    {
        $kategori_galeri=KategoriGaleri::all();
        
        return view('kategori_galeri.index',compact('kategori_galeri'));
    }
}
