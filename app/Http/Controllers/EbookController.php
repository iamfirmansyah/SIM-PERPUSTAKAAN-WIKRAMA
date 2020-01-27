<?php

namespace App\Http\Controllers;
use App\Ebook;
use App\Etube;
use App\Artikel;
use Illuminate\Http\Request;
use File;
class EbookController extends Controller
{
	public function index(){
		$artikels      = Artikel::get();
		$tubes      = Etube::get();
       	$books = Ebook::latest()->paginate(5);
    		return view('admin.ebook.index',compact('books','tubes','artikels'))
    			->with('i',(request()->input('page', 1 ) -1 ) *5);
    }
        public function create(){
    	return view('admin.ebook.create');
    }
      	public function store(Request $request)
    {

   		$request->validate([
   			'judul' => 'required',
            'cover'         =>  'required|image|max:2048'
   			
   		]);
        $foto = $request->file('cover');
        $namaFile = \Carbon\Carbon::now()->timestamp . '_' . uniqid() . '.' . $foto->getClientOriginalExtension();
        $foto->move(public_path('asset/upload/ebook/'),$namaFile);
   		Ebook::create([
   			'judul'       =>   $request->judul,
            'isbn'        =>   $request->isbn,
            'pengarang'       =>   $request->pengarang,
            'penerbit'        =>   $request->penerbit,
            'jumlah_halaman'       =>   $request->jumlah_halaman,
            'deskripsi'        =>   $request->deskripsi,
            'link'       =>   $request->link,
            'cover'            =>   $namaFile,
            'tahun_terbit' => $request->tahun_terbit
   		]);
   		return redirect()->route('ebook')
   						->with('sukses','Berhasil Menambahkan Buku');
    }
  		 public function destroy($id){
			$books = Ebook::find($id);
			$image_url = $books['cover'];
			File::delete(public_path('asset/upload/ebook/') . $image_url);
    		$books->delete();
    		return redirect()->route('ebook')
    					->with('danger','Data Berhasil Di Hapus');
    }
    	public function edit($id){
    		 $books = Ebook::find($id);
        
        // $siswas = Siswa::where('id_siswa', $id)->first();
        // dd($siswas);        
        return view('admin.ebook.edit',['books' => $books]); 
    	}
    	public function update(Request $request, $id)
	    {
			if ($request->hasFile('cover')) {
				$foto = $request->file('cover');
				$namaFile = \Carbon\Carbon::now()->timestamp . '_' . uniqid() . '.' . $foto->getClientOriginalExtension();
				$foto->move(public_path('asset/upload/ebook/'),$namaFile);
				$books = Ebook::find($id);
				$image_url = $books['cover'];
				File::delete(public_path('asset/upload/ebook/') . $image_url);
				$books->update($request->all());
				$books->update(['cover' => $namaFile]);
				return redirect()->route('ebook')->with('warning','Data Berhasil Di Update');
				// return json_encode($image_url);
			}else{
				$books = Ebook::find($id);
				$books->update($request->all());
				return redirect()->route('ebook')->with('warning','Data Berhasil Di Update');
			}
	    }


}
