<?php
 
namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\KategoriBerita;

class KategoriBeritaController extends Controller
{
    public function index(){
        
        $KategoriBerita=KategoriBerita::all(); 

        return view ('kategori_berita.index',compact('KategoriBerita'));
        //return view ('kategori_berita.index'->with('data',$KategoriBerita);
    }

    public function show($id) {

        //$KategoriBerita=KategoriBerita::where('id',$id)->first();
        $KategoriBerita=KategoriBerita::find($id);

        return view ('kategori_berita.show', compact('KategoriBerita'));
        
    }

    public function create(){
        return view('kategori_berita.create');
    }

    public function store(Request $request) {
        $input=$request->all();

        KategoriBerita::create($input);

        return redirect(route('kategori_berita.index'));
    }
}