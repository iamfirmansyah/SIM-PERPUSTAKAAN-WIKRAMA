<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Etube;
use DB;

class EtubeviewController extends Controller
{
    public function index()
    {
        $tubes = Etube::latest()->paginate(5);
    	return view('perpustakaan.e-learning.video.content', compact('tubes'));
    }
    public function detail($id)
    {
        $tubes = Etube::find($id);
        $tubes->get();
        return view('perpustakaan.e-learning.video.detail.detail', compact('tubes'));
        
    	
        // return json_encode($preftubes);
    }
}
