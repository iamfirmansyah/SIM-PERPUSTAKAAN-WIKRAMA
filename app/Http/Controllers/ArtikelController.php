<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Artikel;
use App\Ebook;
use App\Etube;
use File;
class ArtikelController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {   
        $tubes      = Etube::get();
        $books      = Ebook::get();
        $artikels = Artikel::latest()->paginate(5);
                return view('admin/artikel/index',compact('artikels','books','tubes'))
                ->with('i',(request()->input('page',1) -1) *5);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('admin/artikel/create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $request->validate([
            'judul'=>'required',
            'deskripsi'=>'required'
        ]);
        $cover = $request->file('cover');
        $namaFile = \Carbon\Carbon::now()->timestamp . '_' . uniqid() . '.' .$cover->getClientOriginalExtension();
        $cover->move(public_path('asset/upload/artikel/'),$namaFile);
        Artikel::create([
            'judul' => $request->judul,
            'deskripsi' =>$request->deskripsi,
            'cover' => $namaFile,
            'label' => $request->label,
            'author' => $request->author]);
        return redirect()->route('artikel')
            ->with('sukses','Berhasil Menambahkan Artikel');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $artikels = \App\Artikel::find($id);
        return view('admin.artikel.edit',['artikels'=>$artikels]);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        if ($request->hasFile('cover')) {
            $cover = $request->file('cover');
            $namaFile = \Carbon\Carbon::now()->timestamp . '_' . uniqid() . '.' .$cover->getClientOriginalExtension();
            $cover->move(public_path('asset/upload/artikel/'),$namaFile);
            $artikels = Artikel::find($id);
            $image_url = $artikels['cover'];
            File::delete(public_path('asset/upload/artikel/') . $image_url);
            $artikels->update($request->all());
            $artikels->update(['cover' => $namaFile]);
            return redirect()->route('artikel')
            ->with('warning','Artikel Berhasil Diupdate');
        }else{
            $artikels = Artikel::find($id);
            $artikels->update($request->all());
            return redirect()->route('artikel')
            ->with('warning','Artikel Berhasil Diupdate');
        }
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $artikels = \App\Artikel::find($id);
            $artikels->delete();
            return redirect()->route('artikel')
                    ->with('danger','Artikel Berhasil Dihapus');
    }
   
}
