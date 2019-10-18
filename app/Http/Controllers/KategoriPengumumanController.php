<?php
 
namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\KategoriPengumuman;

class KategoriPengumumanController extends Controller
{
    public function index(){
        
        $KategoriPengumuman=KategoriPengumuman::all(); 

        return view ('kategori_pengumuman.index',compact('KategoriPengumuman'));
        
    }

    public function show($id) {

        $KategoriPengumuman=KategoriPengumuman::find($id);
       

        return view ('kategori_pengumuman.show', compact('KategoriPengumuman'));
        
    }

    public function create(){
        return view('kategori_pengumuman.create');
    }

    public function store(Request $request) {
        $input=$request->all();

        KategoriPengumuman::create($input);

        return redirect(route('kategori_pengumuman.index'));
    }

    public function edit($id){
          $KategoriPengumuman=KategoriPengumuman::find($id);


          if (empty($KategoriPengumuman)) {
              return redirect(route('kategori_pengumuman.index'));
        }

        return view('kategori_pengumuman.edit',compact('KategoriPengumuman'));
    }

    public function update($id,request $request){
           $KategoriPengumuman=KategoriPengumuman::find($id);
            $input=$request->all();


          if (empty($KategoriPengumuman)) {
              return redirect(route('kategori_pengumuman.index'));
        }

        $KategoriPengumuman->update($input);
        return redirect(route('kategori_pengumuman.index'));

    }
     public function destroy($id){
        $KategoriPengumuman=KategoriPengumuman::find($id);

        if (empty($KategoriPengumuman)){
            return redirect(route ('kategori_pengumuman.index'));
        }

        $KategoriPengumuman->delete();
        return redirect(route('kategori_pengumuman.index'));
    }

    public function trash(){
        
        $KategoriPengumuman=KategoriPengumuman::onlyTrashed()
                        ->WhereNotNull('deleted_at')
                        ->get();

        return view ('kategori_pengumuman.index',compact('KategoriPengumuman'));
        
    }
}