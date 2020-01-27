<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Kategori;
use App\Etube;
use App\Ebook;
use App\Artikel;


class KategoriController extends Controller
{
    
    public function index()
    {
		$artikels = Artikel::get();
		$tubes = Etube::get();
        $books = Ebook::get();
        $kategoris = Kategori::latest()->paginate(5);
        return view('admin.kategori.index',compact('kategoris','books','tubes','artikels'))
            ->with('i',(request()->input('page', 1 ) -1 ) *5);
    }
	public function create(Request $request)
	{
		Kategori::create([
			'nama_kategori'=>$request->nama_kategori
			]);
		return redirect('admin/kategori')->with('sukses','Berhasil menambahkan data');
		// return json_encode($request->all());
	}
	public function edit(Request $request,$id)
	{
		 Kategori::where('id_kategori',$id)->update([
			'nama_kategori'=>$request->nama_kategori
			]);
		return redirect('admin/kategori')->with('warning','Berhasil merubah data');
	}
	public function delete(Request $request,$id)
	{
		 Kategori::where('id_kategori',$id)->delete();
		return redirect('admin/kategori')->with('danger','Berhasil menghapus data');
		// return json_encode($kategori);
	}
	
}
