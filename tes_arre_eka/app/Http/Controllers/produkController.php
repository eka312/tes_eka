<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\produk;

class produkController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $produk=produk::All();

       return view('/data_produk', ['produk' => $produk]);
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('/tambah_produk');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $produk = produk::create([          
            'kode_produk' => $request->kode_produk,
            'nama_produk' => $request->nama_produk,
            'deskripsi' => $request->deskripsi,
            'harga' => $request->harga,
            'stok' => $request->stok,
            'tanggal_kadaluarsa' => $request->tanggal_kadaluarsa,
        ]);
        return redirect('/data_produk');
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
         // untuk mengambil data produk berdasarkan kolom id_produk
         $produk = produk::where('id_produk', $id)->first();
         return view('/ubah_produk',['produk' => $produk]);
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        produk::where('id_produk', $id)
        ->update([
            'kode_produk' => $request->kode_produk,
            'nama_produk' => $request->nama_produk,
            'deskripsi' => $request->deskripsi,
            'harga' => $request->harga,
            'stok' => $request->stok,
            'tanggal_kadaluarsa' => $request->tanggal_kadaluarsa,
        ]);
        return redirect('/data_produk');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        $delete = produk::where('id_produk', $id)->delete();
        
        //setelah terhapus akan dialihkan ke hal data produk
        return redirect('/data_produk');
    }
}
