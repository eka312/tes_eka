@extends('templating.master')

@section('judul_halaman', 'ubah Data Suplayer | Aplikasi DigiStore Manager')

@section('konten')
    <h1 class="mt-4">ubah data suplayer</h1>
    <nav style="--bs-breadcrumb-divider: url(&#34;data:image/svg+xml,%3Csvg xmlns='http://www.w3.org/2000/svg' width='8' height='8'%3E%3Cpath d='M2.5 0L1 1.5 3.5 4 1 6.5 2.5 8l4-4-4-4z' fill='%236c757d'/%3E%3C/svg%3E&#34;);" aria-label="breadcrumb">
        <ol class="breadcrumb">
            <li class="breadcrumb-item"><a href="/">beranda</a></li>
            <li class="breadcrumb-item"><a href="/data_suplayer">data suplayer</a></li>
            <li class="breadcrumb-item active" aria-current="page">ubah data suplayer</li>
        </ol>
    </nav>

    <div class="card mb-4">
        <div class="card-header bg-primary text-light">
            <i class="fas fa-table me-1"></i>
            ubah daftar data suplayer
        </div>
        <div class="card-body text-capitalize">
            <form action="/ubah_suplayer/{{$suplayer->id_suplayer}}" method="post" >
                @csrf
                <div class="mb-4 row">
                    <label for="text" class="col-sm-2 col-form-label">Nama suplayer</label>
                    <div class="col-sm-10">
                        <input name="nama_suplayer" value="{{$suplayer->nama_suplayer}}" class="form-control " type="text" placeholder="Masukkan nama suplayer" id="text" aria-label=".form-control-lg example">
                    </div>
                </div>
                <div class="mb-4 row">
                    <label for="text" class="col-sm-2 col-form-label">alamat suplayer</label>
                    <div class="col-sm-10">
                        <input class="form-control" type="text" value="{{$suplayer->alamat_suplayer}}" name="alamat_suplayer" placeholder="Masukkan alamat suplayer" id="text">
                    </div>
                </div>
                <button type="submit" class="btn btn-primary">Simpan</button>
            </form>
        </div>
    </div>
@endsection
