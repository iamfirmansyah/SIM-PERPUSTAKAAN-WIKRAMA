<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Etube;
use App\Artikel;
use App\Ebook;
use App\Kategori;
use DB;
class EtubeController extends Controller
{
    public function index(){
        $artikels      = Artikel::get();
        $tubes      = Etube::get();
        $books      = Ebook::get();
        return view('admin/etube/index',compact('books','tubes','artikels'));
    }
    public function create(){
        $kategoris = Kategori::get();
    	return view('admin/etube/create', compact('kategoris'));
    }
    public function store(Request $request){
        Etube::create($request->all());
    	return redirect()->route('etube')
    					->with('sukses','Berhasil Menambahkan Video');
    }
    public function edit($id){

        $kategoris = Kategori::get();
        $etube = Etube::join('kategoris', 'etube.id_kategori' ,'=','kategoris.id_kategori')
        ->select('etube.*','kategoris.nama_kategori')
        ->where('etube.id',$id)
        ->get();
        $etube = $etube[0];
        return view('admin.etube.edit', compact('etube','kategoris'));
    }
    public function destroy($id){
    	$etube = Etube::find($id);	
    	$etube->delete();
    	return redirect()->route('etube')->with('danger','Data berhasil Di Hapus');
    }
    public function update(Request $request, $id ){
    	$etube = Etube::find($id);
    	$etube->update($request->all());
    	return redirect()->route('etube')
        				->with('warning','Data Berhasil Di Update');
        // return json_encode($request->all());
    }
}
