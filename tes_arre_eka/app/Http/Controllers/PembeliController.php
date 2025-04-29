<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\pembeli;

class PembeliController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $pembeli=pembeli::All();
        return view('pembeli.data_pembeli', compact('pembeli'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('pembeli.tambah_pembeli');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $pembeli = pembeli::create([
            'nama_pembeli' => $request->nama_pembeli,
            'jk' => $request->jk,
            'alamat_pembeli' => $request->alamat_pembeli,
        ]);
        return redirect('/data_pembeli');
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
         // untuk mengambil data pembeli berdasarkan kolom id_pembeli
         $pembeli = pembeli::where('id_pembeli', $id)->first();
         return view('pembeli.ubah_pembeli',compact('pembeli'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        pembeli::where('id_pembeli', $id)
        ->update([
            'nama_pembeli' => $request->nama_pembeli,
            'jk' => $request->jk,
            'alamat_pembeli' => $request->alamat_pembeli,
        ]);
        return redirect('/data_pembeli');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        $delete = pembeli::where('id_pembeli', $id)->delete();
        
        //setelah terhapus akan dialihkan ke hal data pembeli
        return redirect('/data_pembeli');
    }
}
