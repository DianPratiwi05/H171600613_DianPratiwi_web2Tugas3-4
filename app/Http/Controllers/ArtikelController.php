<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Artikel;
class ArtikelController extends Controller
{
    public function index()
    {
        $artikel=Artikel::all();
        
        return view('artikel.index',compact('artikel'));
    }
}
