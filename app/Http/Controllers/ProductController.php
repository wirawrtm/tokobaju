<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Produk;
use App\Models\checkout;
use Illuminate\Support\Facades\Storage;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Redirect;

class ProductController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $produk=produk::all();
        $produk2=Auth::user();
        return view('admin.admin',[
            'produk'=>$produk,
            'produk2'=>$produk2,
        ]);
    }

    public function proses()
    {
        $produk=checkout::where('kirim', 'belum kirim')->get();
        $produk2=Auth::user();

        return view('admin.listonproses',[
            'produk'=>$produk,
            'produk2'=>$produk2,
        ]);
    }

    public function kirim($id, $ids)
    {
        $produk=checkout::find($id);
        $prodif=produk::find($ids);
        $produk->kirim = 'kirim';
        $prodif->terjual++;
        $prodif->jumlah--;
        $produk->save();
        $prodif->save();
        return redirect::back();
    }

    public function belanjaan()
    {
        $produk=checkout::all();
        $produk2=Auth::user();
        return view('admin.historybelanjaan',[
            'produk'=>$produk,
            'produk2'=>$produk2,
        ]);
    }

    public function addproduct()
    {
        $produk2=Auth::user();
        return view('admin.addproduct',[
            'produk2'=>$produk2,
        ]);
    }

    public function editprofile()
    {
        
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
        $user = auth::user();
        $new = new produk;
        $new->iduser = $user->id;
        $new->nama = $request->nama;
        $new->foto = $request->file('avatar')->store('barang');
        if ($request->ukurans=='') {
            $new->ukurans = '';
        } else {
            $new->ukurans = 'yes';
        };
        if ($request->ukuranm=='') {
            $new->ukuranm = '';
        } else {
            $new->ukuranm = 'yes';
        };
        if ($request->ukuranl=='') {
            $new->ukuranl = '';
        } else {
            $new->ukuranl = 'yes';
        };
        if ($request->ukuranxl=='') {
            $new->ukuranxl = '';
        } else {
            $new->ukuranxl = 'yes';
        };
        if ($request->detail1=='') {
            $new->detail1 = '';
        } else {
            $new->detail1 = $request->detail1;
        };
        if ($request->detail2=='') {
            $new->detail2 = '';
        } else {
            $new->detail2 = $request->detail2;
        };
        if ($request->detail3=='') {
            $new->detail3 = '';
        } else {
            $new->detail3 = $request->detail3;
        };
        if ($request->detail4=='') {
            $new->detail4 = '';
        } else {
            $new->detail4 = $request->detail4;
        };
        if ($request->detail5=='') {
            $new->detail5 = '';
        } else {
            $new->detail5 = $request->detail5;
        };

        $new->harga = $request->harga;
        $new->jumlah = $request->jumlah;
        $new->keterangan = $request->keterangan;
        // ddd($new);
        $new->save();
        return redirect('adm');

    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $produk2 = auth::user();
        $edit=produk::find($id);
        return view ('admin.editproduct',[
            'edit'=>$edit,
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
        $update=produk::find($id);
        if($request->file('avatar')==''){

        }else{
            storage::delete($update->foto);
            $update->foto = $request->avatar;
        }
        $update->nama = $request->nama;
        if ($request->ukurans=='') {
            $update->ukurans = '';
        } else {
            $update->ukurans = 'yes';
        };
        if ($request->ukuranm=='') {
            $update->ukuranm = '';
        } else {
            $update->ukuranm = 'yes';
        };
        if ($request->ukuranl=='') {
            $update->ukuranl = '';
        } else {
            $update->ukuranl = 'yes';
        };
        if ($request->ukuranxl=='') {
            $update->ukuranxl = '';
        } else {
            $update->ukuranxl = 'yes';
        };
        if ($request->detail1=='') {
            $update->detail1 = '';
        } else {
            $update->detail1 = $request->detail1;
        };
        if ($request->detail2=='') {
            $update->detail2 = '';
        } else {
            $update->detail2 = $request->detail2;
        };
        if ($request->detail3=='') {
            $update->detail3 = '';
        } else {
            $update->detail3 = $request->detail3;
        };
        if ($request->detail4=='') {
            $update->detail4 = '';
        } else {
            $update->detail4 = $request->detail4;
        };
        if ($request->detail5=='') {
            $update->detail5 = '';
        } else {
            $update->detail5 = $request->detail5;
        };

        $update->harga = $request->harga;
        $update->jumlah = $request->jumlah;
        $update->keterangan = $request->keterangan;
        // ddd($new);
        $update->save();
        return redirect ('../adm');

    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $destroy = produk::find($id);
        storage::delete ($destroy->foto);
        $destroy->delete();
        return redirect('../adm');
    }
}
