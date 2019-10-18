<?php
 
namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\KategoriBerita;

class KategoriBeritaController extends Controller
{
    public function index(){
        
        $KategoriBerita=KategoriBerita::all(); 

        return view ('kategori_berita.index',compact('KategoriBerita'));
        
    }

    public function show($id) {

        
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

    public function edit($id){
          $KategoriBerita=KategoriBerita::find($id);


          if (empty($KategoriBerita)) {
              return redirect(route('kategori_berita.index'));
        }

        return view('kategori_berita.edit',compact('KategoriBerita'));
    }

    public function update($id,request $request){
           $KategoriBerita=KategoriBerita::find($id);
            $input=$request->all();


          if (empty($KategoriBerita)) {
              return redirect(route('kategori_berita.index'));
        }

        $KategoriBerita->update($input);
        return redirect(route('kategori_berita.index'));

    }
     public function destroy($id){
        $KategoriBerita=KategoriBerita::find($id);

        if (empty($KategoriBerita)){
            return redirect(route ('kategori_berita.index'));
        }

        $KategoriBerita->delete();
        return redirect(route('kategori_berita.index'));
    }

    
    public function trash(){
        
        $KategoriBerita=KategoriBerita::onlyTrashed()
                        ->WhereNotNull('deleted_at')
                        ->get();

        return view ('kategori_berita.index',compact('KategoriBerita'));
       
    }
}