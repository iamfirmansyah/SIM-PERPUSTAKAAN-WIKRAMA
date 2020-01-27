<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\User;

class AkunController extends Controller
{
    public function index(){
    	return view('admin.akun.index');
    }

    public function edit($id){
        $user = User::find($id);
    	return view('admin.akun.edit',compact('user'));
    }

    // public function show(Request $request,$id)
    // {
        
    // }
    public function update(Request $request,$id)
    {
        $user = User::find($id);
        $user->update([
            'username' => $request->username,
            'email' => $request->email,
            'name' => $request->name,
            'title' => $request->title,
            'position' => $request->position,
            'instagram' => $request->instagram,
            'twitter' => $request->twitter,
            'github' => $request->github,
            'about_me' => $request->about_me,
        ]);
        return redirect('admin/akun')->with('warning','User Profile berhasil di edit');
        // return json_encode($user);
    }
}
