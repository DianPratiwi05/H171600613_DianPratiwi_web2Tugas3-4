<?php
 
namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\KategoriGaleri;

class KategoriGaleriController extends Controller
{
    public function index(){
        
        $KategoriGaleri=KategoriGaleri::all(); 

        return view ('kategori_galeri.index',compact('KategoriGaleri'));
        //return view ('kategori_Galeri.index'->with('data',$KategoriGaleri);
    }

    public function show($id) {

        //$KategoriGaleri=KategoriGaleri::where('id',$id)->first();
        $KategoriGaleri=KategoriGaleri::find($id);

        return view ('kategori_galeri.show', compact('KategoriGaleri'));
        
    }

    public function create(){
        return view('kategori_galeri.create');
    }

    public function store(Request $request) {
        $input=$request->all();

        KategoriGaleri::create($input);

        return redirect(route('kategori_galeri.index'));
    }
}