<?php
 
namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\KategoriGaleri;

class KategoriGaleriController extends Controller
{
    public function index(){
        
        $KategoriGaleri=KategoriGaleri::all(); 

        return view ('kategori_galeri.index',compact('KategoriGaleri'));
        
    }

    public function show($id) {

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

    public function edit($id){
          $KategoriGaleri=KategoriGaleri::find($id);


          if (empty($KategoriGaleri)) {
              return redirect(route('kategori_galeri.index'));
        }

        return view('kategori_galeri.edit',compact('KategoriGaleri'));
    }

   public function update($id,request $request){
           $KategoriGaleri=KategoriGaleri::find($id);
            $input=$request->all();


          if (empty($KategoriGaleri)) {
              return redirect(route('kategori_galeri.index'));
        }

        $KategoriGaleri->update($input);
        return redirect(route('kategori_galeri.index'));

    }
     public function destroy($id){
        $KategoriGaleri=KategoriGaleri::find($id);

        if (empty($KategoriGaleri)){
            return redirect(route ('kategori_galeri.index'));
        }

        $KategoriGaleri->delete();
        return redirect(route('kategori_galeri.index'));
    }

     public function trash(){
        
        $KategoriGaleri=KategoriGaleri::onlyTrashed()
                        ->WhereNotNull('deleted_at')
                        ->get();

        return view ('kategori_galeri.index',compact('KategoriGaleri'));
        
    }
}