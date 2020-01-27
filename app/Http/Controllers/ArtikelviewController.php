<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Artikel;
class ArtikelviewController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $artikels = Artikel::latest()->paginate(5);
        return view('perpustakaan.blog.content',compact('artikels'))
        ->with('i',(request()->input('page',1) -1) *5);
    }
    public function show($id)
    {
        $artikels = Artikel::find($id);
          return view('perpustakaan.blog.blog-detail.content',['artikels'=>$artikels]);
    }
}
