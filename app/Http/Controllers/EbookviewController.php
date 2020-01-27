<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Ebook;
class EbookviewController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
         $books = Ebook::latest()
         ->join('kategoris', 'ebook.id_kategori' ,'=','kategoris.id_kategori')
         ->select('ebook.*','kategoris.nama_kategori')
         ->paginate(5);
        return view('perpustakaan.e-learning.e-book.content',compact('books'));
    }
    public function detail($id)
    {
        $book = Ebook::find($id);
        $book->get();
        return view('perpustakaan.e-learning.e-book.detail.detail', compact('book'));
        
    	
        // return json_encode($book);
    }
}
