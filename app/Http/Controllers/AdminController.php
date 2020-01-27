<?php

namespace App\Http\Controllers;
use App\Ebook;
use App\Email;
use App\Artikel;
use App\Etube;
use Illuminate\Http\Request;

class AdminController extends Controller
{
	 public function __construct()
    {
        $this->middleware('auth');
    }

    public function index(){
        $artikels      = Artikel::get();
        $books      = Ebook::get();
        $tubes      = Etube::get();
    	$emails		= Email::latest()->take(5)->get();
    	return view('admin/dashboard/index',compact('emails','books','tubes','artikels'))
    	 ->with('i',(request()->input('page',1) -1) *5);
    	 

    }
}
