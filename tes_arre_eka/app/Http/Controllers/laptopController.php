<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\laptop;
use App\Models\suplayer;


class laptopController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $laptop = laptop::join('suplayers', 'laptops.id_suplayer', '=', 'suplayers.id_suplayer')
        ->get();

       return view('laptop.data_laptop', ['laptop' => $laptop]);
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {   
        $suplayer = suplayer::All();
        return view('laptop.tambah_laptop', ['suplayer' => $suplayer]);
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $laptop = laptop::create([          
            'nama_laptop' => $request->nama_laptop,
            'deskripsi' => $request->deskripsi,
            'id_suplayer' => $request->id_suplayer,
            'stok' => $request->stok,
            'harga_beli' => $request->harga_beli,
            'harga_jual' => $request->harga_jual,
        ]);
        return redirect('/data_laptop');
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
         // untuk mengambil data laptop berdasarkan kolom id_laptop
         $laptop = laptop::where('id_laptop', $id)->first();
         $suplayer=suplayer::All();
         return view('laptop.ubah_laptop',['laptop' => $laptop,'suplayer' => $suplayer]);
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        laptop::where('id_laptop', $id)
        ->update([
            'nama_laptop' => $request->nama_laptop,
            'deskripsi' => $request->deskripsi,
            'id_suplayer' => $request->id_suplayer,
            'stok' => $request->stok,
            'harga_beli' => $request->harga_beli,
            'harga_jual' => $request->harga_jual,
        ]);
        return redirect('/data_laptop');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        $delete = laptop::where('id_laptop', $id)->delete();
        
        //setelah terhapus akan dialihkan ke hal data laptop
        return redirect('/data_laptop');
    }
}
