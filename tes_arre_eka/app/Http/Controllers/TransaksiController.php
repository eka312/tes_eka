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
        $transaksi = transaksi::with(['laptop', 'pembeli', 'user'])->get();

        return view('transaksi.data_transaksi', compact('transaksi'));

    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        $laptop=laptop::All();
        $pembeli=pembeli::All();
        $user=User::All();
        return view('transaksi.tambah_transaksi', compact('laptop', 'pembeli', 'user'));
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        // Validasi input sebelum menyimpan transaksi
        $request->validate([
            'id_laptop' => 'required|exists:laptops,id_laptop',
            'jumlah_barang' => 'required|integer|min:1',
        ]);

        // Ambil data laptop berdasarkan ID
        $laptop = laptop::where('id_laptop', $request->id_laptop)->firstOrFail();


        // Cek apakah stok mencukupi
        if ($laptop->stok < $request->jumlah_barang) {
            return back()->with('error', 'Stok tidak mencukupi!');
        }

        // Kurangi stok laptop
        $laptop->stok -= $request->jumlah_barang;
        $laptop->save();

        // Simpan transaksi setelah stok diperbarui
        transaksi::create([
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
        // Ambil data transaksi berdasarkan id_transaksi
        $transaksi = transaksi::where('id_transaksi', $id)->firstOrFail();
        
        // Ambil semua data terkait
        $laptop = laptop::all();
        $pembeli = pembeli::all();
        $user = User::all();

        return view('transaksi.ubah_transaksi', compact('transaksi', 'laptop', 'pembeli', 'user'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
         // Validasi input
        $request->validate([
            'id_laptop' => 'required|exists:laptops,id_laptop',
            'id_pembeli' => 'required|exists:pembelis,id_pembeli',
            'id_user' => 'required|exists:users,id_user',
            'jumlah_barang' => 'required|integer|min:1',
            'bayar' => 'required|numeric|min:0',
            'tggl_beli' => 'required|date',
        ]);

        // Ambil data transaksi lama
        $transaksi = transaksi::where('id_transaksi', $id)->firstOrFail();
        $laptop = laptop::where('id_laptop', $request->id_laptop)->firstOrFail();

        // Kembalikan stok laptop sebelumnya
        $laptop->stok += $transaksi->jumlah_barang;

        // Cek apakah stok cukup untuk perubahan jumlah barang
        if ($laptop->stok < $request->jumlah_barang) {
            return back()->with('error', 'Stok tidak mencukupi untuk perubahan ini!');
        }

        // Kurangi stok dengan jumlah baru
        $laptop->stok -= $request->jumlah_barang;
        $laptop->save();

        // Update transaksi
        $transaksi->update([
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
        $$transaksi = transaksi::findOrFail($id);
        $transaksi->delete();
        
        //setelah terhapus akan dialihkan ke hal data transaksi
        return redirect()->route('transaksi.index');
    }

    
}
