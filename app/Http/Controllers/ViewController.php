<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\produk;
use App\Models\keranjang;
use App\Models\checkout;
use Illuminate\Support\Facades\Storage;
use Illuminate\Support\Facades\Auth;


class ViewController extends Controller
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
        return view('index',[
            'produk'=>$produk,
            'produk2'=>$produk2,
        ]);
    }

    public function single($id)
    {
        $produk=produk::find($id);
        $produk2=Auth::user();
        return view('single-product',[
            'produk'=>$produk,
            'produk2'=>$produk2,
        ]);
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
        if (auth::user() == '') {
            return redirect ()->route('login');
        }
        $user = auth::user();
        $new = new keranjang;
        $new->iduser = $request->iduser;
        $new->idbarang = $request->idbarang;
        $new->idbuyer = $user->id;
        $new->jumlah = $request->jumlah;
        $new->total = $request->harga*$request->jumlah;
        $new->detail = $request->detail;
        $new->ukuran = $request->size;
        $new->keterangan = $request->keterangan;
        $new->save();
        return redirect()->route('addtocart');
        // dd ($new);

    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show()
    {
        // $produk1 = auth::user();
        $produk = keranjang::all();
        $produk2 = auth::user()->id;
        // $produk = keranjang::first();

        // dd ($produk->produk->nama);
        return view('addtocart',[
            'produk'=>$produk,
            'produk2'=>$produk2,
        ]);
    }

    public function editsingle($id)
    {
        $produk = keranjang::find($id);
        // $produk = produk::find($produk1);
        // dd ($produk);
        return view ('editsingleproduk', [
            'produk'=>$produk,
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

    public function checkout($idbuyer)
    {
        $cart = keranjang::where ('idbuyer', $idbuyer)->get();
        // dd ($cart);
        foreach ($cart as $co ) {
            checkout::create([
                'iduser'=>$co->iduser,
                'idbarang'=>$co->idbarang,
                'idbuyer'=>$co->idbuyer,
                'jumlah'=>$co->jumlah,
                'ukuran'=>$co->ukuran,
                'detail'=>$co->detail,
                'keterangan'=>$co->keterangan,

            ]);
        }
        foreach ($cart as $del) {
            $del->delete();
        }
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
        $produk = keranjang::find($id);
        $produk->iduser = $request->iduser;
        $produk->idbarang = $request->idbarang;
        $produk->idbuyer = auth::user()->id;
        $produk->jumlah = $request->jumlah;
        $produk->total = $request->harga*$request->jumlah;
        $produk->ukuran = $request->size;
        $produk->detail = $request->detail;
        $produk->keterangan = $request->keterangan;
        $produk->save();
        return redirect()->route('addtocart');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $produk = keranjang::find($id);
        $produk->delete();
        return redirect()->route('addtocart');
    }
}
