@extends('templating.master')

@section('judul_halaman', 'ubah Data Laptop | Aplikasi DigiStore Manager')

@section('konten')
    <h1 class="mt-4">ubah data laptop</h1>
    <nav style="--bs-breadcrumb-divider: url(&#34;data:image/svg+xml,%3Csvg xmlns='http://www.w3.org/2000/svg' width='8' height='8'%3E%3Cpath d='M2.5 0L1 1.5 3.5 4 1 6.5 2.5 8l4-4-4-4z' fill='%236c757d'/%3E%3C/svg%3E&#34;);" aria-label="breadcrumb">
        <ol class="breadcrumb">
            <li class="breadcrumb-item"><a href="/">beranda</a></li>
            <li class="breadcrumb-item"><a href="/data_laptop">data laptop</a></li>
            <li class="breadcrumb-item active" aria-current="page">ubah data laptop</li>
        </ol>
    </nav>

    <div class="card mb-4">
        <div class="card-header bg-primary text-light">
            <i class="fas fa-table me-1"></i>
            ubah daftar data laptop
        </div>
        <div class="card-body text-capitalize">
            <form action="/ubah_laptop/{{$laptop->id_laptop}}" method="post" >
                @csrf
                <div class="mb-4 row">
                    <label for="text" class="col-sm-2 col-form-label">Nama laptop</label>
                    <div class="col-sm-10">
                        <input name="nama_laptop" value="{{$laptop->nama_laptop}}" class="form-control " type="text" placeholder="Masukkan nama laptop" id="text" aria-label=".form-control-lg example">
                    </div>
                </div>
                <div class="mb-4 row">
                    <label for="text" class="col-sm-2 col-form-label">deskripsi laptop</label>
                    <div class="col-sm-10">
                        <input class="form-control" type="text" value="{{$laptop->deskripsi}}" name="deskripsi" placeholder="Masukkan deskripsi laptop" id="text">
                    </div>
                </div>
                <div class="mb-4 row">
                    <label class="col-sm-2 col-form-label">suplayer</label>
                    <div class="col-sm-10">
                        <select name="id_suplayer" value="{{$laptop->nama_suplayer}}" name="deskripsi" class="form-select" aria-label="Default select example">
                            @foreach ($suplayer as $item)
                                <option value="{{$item->id_suplayer}}">{{$item->nama_suplayer}}</option>
                            @endforeach
                        </select>
                    </div>
                </div>
                <div class="mb-4 row">
                    <label for="stok" class="col-sm-2 col-form-label">stok</label>
                    <div class="col-sm-10">
                        <input name="stok" value="{{$laptop->stok}}" class="form-control " type="number" placeholder="Masukkan jumlah stok" id="stok" aria-label=".form-control-lg example">
                    </div>
                </div>
                <div class="mb-4 row">
                    <label for="text" class="col-sm-2 col-form-label">harga beli</label>
                    <div class="col-sm-10">
                        <input name="harga_beli" value="{{$laptop->harga_beli}}" class="form-control " type="number" placeholder="Masukkan harga beli" id="text" aria-label=".form-control-lg example">
                    </div>
                </div>
                <div class="mb-4 row">
                    <label for="text" class="col-sm-2 col-form-label">harga jual</label>
                    <div class="col-sm-10">
                        <input name="harga_jual" value="{{$laptop->harga_jual}}" class="form-control " type="number" placeholder="Masukkan harga jual" id="text" aria-label=".form-control-lg example">
                    </div>
                </div>
                <button type="submit" class="btn btn-primary">Simpan</button>
            </form>
        </div>
    </div>
@endsection
