<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\user;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Redirect;
use Illuminate\Support\Facades\Storage;
use Illuminate\Support\Facades\Hash;


class UserController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $tampil=user::all;
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        if ($request->email == user::find('email')) {
            return redirect('adduser');
        } else {        
        $base=new user;
        $base->nama = $request->nama;
        $base->email = $request->email;
        if ($request->password1 == $request->password2) {
            $base->password = Hash::make ($request->password1);
        } else {
            return redirect('adduser');
        }
        $base->namatoko = $request->namatoko;
        $base->foto = $request->file('avatar')->store('user');
        $base->save();
        return redirect('login');
        }
        
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $tampil=user::find($id);
        $produk2=Auth::user();
        return view('admin.editprofile',[
            'tampil'=>$tampil,
            'produk2'=>$produk2,
        ]);
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
        //
    }

    public function login(Request $request)
    {
        $valid = $request->validate([
            'email' => 'required',
            'password' => 'required',
        ]);

        if(auth::attempt($valid)){
            $request->session()->regenerate();
            // dd('showuser/'.Auth::user()->id);
            // return redirect()->intended('showuser/'.Auth::user()->id);
            return redirect()->intended(route('index'));
        }
        return back()->with('err', 'Gagal Login !!');
    }

    public function logout(Request $request)
    {
        Auth::logout();
     
        $request->session()->invalidate();
     
        $request->session()->regenerateToken();
     
        return redirect::back();
    }    
    
}
