<?php

namespace App\Http\Controllers;

use Illuminate\Support\Facades\DB;
use Illuminate\Http\Request;
use App\Models\transaksi;
use App\Models\laptop;
use App\Models\pembeli;
use App\Models\User;

class TransaksiController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $transaksi = DB::table('transaksis')
        ->join('laptops', 'transaksis.id_laptop', '=', 'laptops.id_laptop')
        ->join('pembelis', 'transaksis.id_pembeli', '=', 'pembelis.id_pembeli')
        ->join('users', 'transaksis.id_user', '=', 'users.id_user')
        ->select('transaksis.*', 'laptops.nama_laptop', 'pembelis.nama_pembeli', 'users.name')
        ->get();

       return view('transaksi.data_transaksi', ['transaksi' => $transaksi]);

    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        $laptop=laptop::All();
        $pembeli=pembeli::All();
        $user=User::All();
        return view('transaksi.tambah_transaksi', ['laptop' => $laptop,'pembeli' => $pembeli,'user' => $user]);
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $transaksi = transaksi::create([
            'id_laptop' => $request->id_laptop,
            'id_pembeli' => $request->id_pembeli,
            'jumlah_barang' => $request->jumlah_barang,
            'bayar' => $request->bayar,
            'tggl_beli' => $request->tggl_beli,
            'id_user' => $request->id_user,
        ]);
        

        return redirect('/data_transaksi');
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
        // untuk mengambil data transaksi berdasarkan kolom id_transaksi
        $transaksi = transaksi::where('id_transaksi', $id)->first();
        $laptop=laptop::All();
        $pembeli=pembeli::All();
        $user=User::All();
        return view('transaksi.ubah_transaksi',['transaksi' => $transaksi,'laptop' => $laptop,'pembeli' => $pembeli,'user' => $user]);
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        transaksi::where('id_transaksi', $id)
        ->update([
            'id_laptop' => $request->id_laptop,
            'id_pembeli' => $request->id_pembeli,
            'jumlah_barang' => $request->jumlah_barang,
            'bayar' => $request->bayar,
            'tggl_beli' => $request->tggl_beli,
            'id_user' => $request->id_user,
        ]);
        return redirect('/data_transaksi');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        $delete = transaksi::where('id_transaksi', $id)->delete();
        
        //setelah terhapus akan dialihkan ke hal data transaksi
        return redirect('/data_transaksi');
    }

    
}
