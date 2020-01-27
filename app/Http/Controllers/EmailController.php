<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Email;

class EmailController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        // $emails = Email::paginate(5);
        $emails = Email::latest()->get();
        $inbox = Email::where('email.status','=','unread')->count();
        return view('admin.email.inbox', compact('emails','inbox'))
        ->with('i', 1);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('perpustakaan.contact.content');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */ 
    public function store(Request $request)
    {
        Email::create($request->all());
        return redirect()->route('perpustakaan_contact')
                        ->with('sukes','Data Berhasil Di Input');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $email = Email::find($id);
        $email->update(['status'=>'read']);
        $email->get();
        $inbox = Email::where('email.status','=','unread')->count();
        return view('admin.email.read',compact('email','inbox'));
        // return json_encode($email);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //
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
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $email = Email::find($id);
        $email->delete();
        return redirect()->route('email')
        ->with('warning','Email barhasil dihapus');
    }
    public function readall()
    {
        Email::update(['status'=>'read']);
        return redirect()->route('email');
    }
}
