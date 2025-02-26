@extends('templating.master')

@section('judul_halaman', 'ubah Data Transaksi | Aplikasi DigiStore Manager')

@section('konten')
    <h1 class="mt-4">ubah data transaksi</h1>
    <nav style="--bs-breadcrumb-divider: url(&#34;data:image/svg+xml,%3Csvg xmlns='http://www.w3.org/2000/svg' width='8' height='8'%3E%3Cpath d='M2.5 0L1 1.5 3.5 4 1 6.5 2.5 8l4-4-4-4z' fill='%236c757d'/%3E%3C/svg%3E&#34;);" aria-label="breadcrumb">
        <ol class="breadcrumb">
            <li class="breadcrumb-item"><a href="/">beranda</a></li>
            <li class="breadcrumb-item"><a href="/data_transaksi">data transaksi</a></li>
            <li class="breadcrumb-item active" aria-current="page">ubah data transaksi</li>
        </ol>
    </nav>

    <div class="card mb-4">
        <div class="card-header bg-primary text-light">
            <i class="fas fa-table me-1"></i>
            ubah daftar data transaksi
        </div>
        <div class="card-body text-capitalize">
            <form action="/ubah_transaksi/{{$transaksi->id_transaksi}}" method="post" >
                @csrf
                <div class="mb-4 row">
                    <label class="col-sm-2 col-form-label">laptop</label>
                    <div class="col-sm-10">
                        <select name="id_laptop" value="{{$transaksi->nama_laptop}}" class="form-select" aria-label="Default select example">
                            @foreach ($laptop as $item)
                                <option @if($item->id_laptop==$transaksi->id_laptop) selected @endif value="{{$item->id_laptop}}">{{$item->nama_laptop}}</option>
                            @endforeach
                        </select>
                    </div>
                </div>
                <div class="mb-4 row">
                    <label class="col-sm-2 col-form-label">pembeli</label>
                    <div class="col-sm-10">
                        <select name="id_pembeli" value="{{$transaksi->nama_pembeli}}" class="form-select" aria-label="Default select example">
                            @foreach ($pembeli as $item)
                                <option @if($item->id_pembeli==$transaksi->id_pembeli) selected @endif value="{{$item->id_pembeli}}">{{$item->nama_pembeli}}</option>
                            @endforeach
                        </select>
                    </div>
                </div>
                <div class="mb-4 row">
                    <label for="text" class="col-sm-2 col-form-label">jumlah barang</label>
                    <div class="col-sm-10">
                        <input name="jumlah_barang" value="{{$transaksi->jumlah_barang}}"  class="form-control " type="number" placeholder="Masukkan jumlah barang" id="text" aria-label=".form-control-lg example">
                    </div>
                </div>
                <div class="mb-4 row">
                    <label for="text" class="col-sm-2 col-form-label">jumlah bayar</label>
                    <div class="col-sm-10">
                        <input name="bayar" value="{{$transaksi->bayar}}"   class="form-control " type="number" placeholder="Masukkan jumlah bayar" id="text" aria-label=".form-control-lg example">
                    </div>
                </div>
                <div class="mb-4 row">
                    <label for="text" class="col-sm-2 col-form-label">tanggal beli</label>
                    <div class="col-sm-10">
                        <input name="tggl_beli" value="{{$transaksi->tggl_beli}}" class="form-control " type="date"  id="text" aria-label=".form-control-lg example">
                    </div>
                </div>
                <div class="mb-4 row">
                    <label class="col-sm-2 col-form-label">penjual</label>
                    <div class="col-sm-10">
                        <select name="id_user" value="{{$transaksi->name}}" class="form-select" aria-label="Default select example">
                            @foreach ($user as $item)
                                <option @if($item->id_user==$transaksi->id_user) selected @endif value="{{$item->id_user}}">{{$item->name}}</option>
                            @endforeach
                        </select>
                    </div>
                </div>
                <button type="submit" class="btn btn-primary">Simpan</button>
            </form>
        </div>
    </div>
@endsection
