@extends('templating.master')

@section('judul_halaman', 'Data Transaksi | Aplikasi DigiStore Manager')

@section('konten')
    <h1 class="mt-4">data transaksi</h1>
    <nav style="--bs-breadcrumb-divider: url(&#34;data:image/svg+xml,%3Csvg xmlns='http://www.w3.org/2000/svg' width='8' height='8'%3E%3Cpath d='M2.5 0L1 1.5 3.5 4 1 6.5 2.5 8l4-4-4-4z' fill='%236c757d'/%3E%3C/svg%3E&#34;);" aria-label="breadcrumb">
        <ol class="breadcrumb">
            <li class="breadcrumb-item"><a href="/">beranda</a></li>
            <li class="breadcrumb-item active" aria-current="page">data transaksi</li>
        </ol>
    </nav>   
           
    <!-- bagian car dan tabel -->
    <div class="card mb-4">
        <div class="card-header bg-light">
            <div class="d-flex">
                <div class="flex-grow-1 d-flex align-items-center">
                    <i class="fas fa-table me-1"></i>
                    daftar data transaksi
                </div>
                <div>
                    <a class="btn btn-primary btn-sm" href="/tambah_transaksi" role="button"><i class="fas fa-add me-2"></i>Tambah</a>
                </div>
            </div>
        </div>
        <div class="card-body">
            <table id="datatablesSimple">
                <thead>
                    <tr>
                        <th>No</th>
                        <th>merek laptop</th>
                        <th>nama pembeli</th>
                        <th>jumlah barang</th>
                        <th>bayar</th>
                        <th>tanggal beli</th>
                        <th>penjual</th>
                        <th>aksi</th>
                    </tr>
                </thead>
                <tbody>
                    @foreach ($transaksi as $item)
                        <tr>
                            <th scope="row">{{$loop->iteration}}</th>
                            <td>{{$item->laptop->nama_laptop}}</td>
                            <td>{{$item->pembeli->nama_pembeli}}</td>
                            <td>{{$item->jumlah_barang}}</td>
                            <td>{{ 'Rp' . number_format($item->bayar, 0, ',', '.') }}</td>
                            <td>{{ \Carbon\Carbon::parse($item->tggl_beli)->format('d-m-Y') }}</td>
                            <td>{{$item->user->name}}</td>
                            <td>
                                <a class="btn btn-warning btn-sm mb-1" href="/ubah_transaksi/{{$item->id_transaksi}}" role="button"><i class="fas fa-edit me-2"></i>ubah</a>
                                <form action="{{ route('transaksi.destroy', $item->id_transaksi) }}" method="POST">
                                    @csrf
                                    @method('DELETE')
                                    <a role="button" class="btn btn-danger btn-sm" type="submit" onclick="return confirm('Yakin ingin menghapus transaksi ini?')">
                                        <i class="fas fa-trash me-2"></i>Hapus
                                    </a>
                                </form>

                            </td>
                        </tr>
                    @endforeach
                </tbody>
            </table>
        </div>
    </div>
@endsection
