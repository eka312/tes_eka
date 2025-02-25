@extends('templating.master')

@section('judul_halaman', 'Tambah Data Pembeli | Aplikasi DigiStore Manager')

@section('konten')
    <h1 class="mt-4">tambah data pembeli</h1>
    <nav style="--bs-breadcrumb-divider: url(&#34;data:image/svg+xml,%3Csvg xmlns='http://www.w3.org/2000/svg' width='8' height='8'%3E%3Cpath d='M2.5 0L1 1.5 3.5 4 1 6.5 2.5 8l4-4-4-4z' fill='%236c757d'/%3E%3C/svg%3E&#34;);" aria-label="breadcrumb">
        <ol class="breadcrumb">
            <li class="breadcrumb-item"><a href="/">beranda</a></li>
            <li class="breadcrumb-item"><a href="/data_pembeli">data pembeli</a></li>
            <li class="breadcrumb-item active" aria-current="page">Tambah data pembeli</li>
        </ol>
    </nav>

    <div class="card mb-4">
        <div class="card-header bg-primary text-light">
            <i class="fas fa-table me-1"></i>
            tambah daftar data pembeli
        </div>
        <div class="card-body text-capitalize">
            <form action="/tambah_pembeli" method="post" >
                @csrf
                <div class="mb-4 row">
                    <label for="text" class="col-sm-2 col-form-label">Nama pembeli</label>
                    <div class="col-sm-10">
                        <input name="nama_pembeli" class="form-control " type="text" placeholder="Masukkan nama pembeli" id="text" aria-label=".form-control-lg example">
                    </div>
                </div>
                <div class="mb-4 row">
                    <label class="col-sm-2 col-form-label">Jenis Kelamin</label>
                    <div class="col-sm-10">
                        <select name="jk" class="form-select" aria-label="Default select example">
                            <option value="laki-laki">laki-laki</option>
                            <option value="perempuan">perempuan</option>
                        </select>
                    </div>
                </div>
                <div class="mb-4 row">
                    <label for="text" class="col-sm-2 col-form-label">alamat </label>
                    <div class="col-sm-10">
                        <input name="alamat_pembeli"  class="form-control " type="text" placeholder="Masukkan alamat pembeli" id="text" aria-label=".form-control-lg example">
                    </div>
                </div>
                <button type="submit" class="btn btn-primary">Simpan</button>
            </form>
        </div>
    </div>
@endsection
