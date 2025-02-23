@extends('master')

@section('judul_halaman', 'Data Produk | Aplikasi Pengelolaan Data Produk')

@section('konten')
    <h1 class="mt-4">data produk</h1>
    <nav style="--bs-breadcrumb-divider: url(&#34;data:image/svg+xml,%3Csvg xmlns='http://www.w3.org/2000/svg' width='8' height='8'%3E%3Cpath d='M2.5 0L1 1.5 3.5 4 1 6.5 2.5 8l4-4-4-4z' fill='%236c757d'/%3E%3C/svg%3E&#34;);" aria-label="breadcrumb">
        <ol class="breadcrumb">
            <li class="breadcrumb-item"><a href="/beranda">beranda</a></li>
            <li class="breadcrumb-item active" aria-current="page">data produk</li>
        </ol>
    </nav>   
           
    <!-- bagian car dan tabel -->
    <div class="card mb-4">
        <div class="card-header bg-light">
            <div class="d-flex">
                <div class="flex-grow-1 d-flex align-items-center">
                    <i class="fas fa-table me-1"></i>
                    daftar data Produk
                </div>
                <div>
                    <a class="btn btn-primary btn-sm" href="/tambah_produk" role="button"><i class="fas fa-add me-2"></i>Tambah</a>
                </div>
            </div>
        </div>
        <div class="card-body">
            <table id="datatablesSimple">
                <thead>
                    <tr>
                        <th>No</th>
                        <th>kode produk</th>
                        <th>nama produk</th>
                        <th>deskripsi</th>
                        <th>harga</th>
                        <th>stok</th>
                        <th>tanggal kadaluarsa</th>
                        <th>aksi</th>
                    </tr>
                </thead>
                <tbody>
                    @foreach ($produk as $item)
                        <tr>
                            <th scope="row">{{$loop->iteration}}</th>
                            <td>{{$item->kode_produk}}</td>
                            <td>{{$item->nama_produk}}</td>
                            <td>{{$item->deskripsi}}</td>
                            <td>{{$item->harga}}</td>
                            <td>{{$item->stok}}</td>
                            <td>{{$item->tanggal_kadaluarsa}}</td>
                            <td>
                                <a class="btn btn-warning btn-sm mb-1" href="/ubah_produk/{{$item->id_produk}}" role="button"><i class="fas fa-edit me-2"></i>ubah</a>
                                <a class="btn btn-danger btn-sm" href="/hapus_produk/{{$item->id_produk}}" onclick="return confirm('apakah anda yakin ingin menghapus data ini?');" role="button"><i class="fas fa-trash me-2"></i>Hapus</a>
                            </td>
                        </tr>
                    @endforeach
                </tbody>
            </table>
        </div>
    </div>
@endsection
