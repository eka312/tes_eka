@extends('bg_login')

@section('judul_halaman', 'Register | Aplikasi Pengelolaan Produk')

@section('konten')
    <div class="card shadow-lg border-0 rounded-lg mt-5">
        <div class="card-header"><h3 class="text-center font-weight-light my-4">Pemulihan Kata Sandi</h3></div>
        <div class="card-body">
            <div class="small mb-3 text-muted">Masukkan alamat email Anda, dan kami akan mengirimkan tautan untuk mengatur ulang kata sandi Anda.</div>
            <form>
                <div class="form-floating mb-3">
                    <input class="form-control" id="inputEmail" type="email" placeholder="name@example.com" />
                    <label for="inputEmail">Email</label>
                </div>
                <div class="d-flex align-items-center justify-content-between mt-4 mb-0">
                    <a class="small" href="/login">Kembali ke login</a>
                    <a class="btn btn-primary" href="/login">Reset Password</a>
                </div>
            </form>
        </div>
        <div class="card-footer text-center py-3">
            <div class="small"><a href="/register">Butuh akun? Daftar sekarang!</a></div>
        </div>
    </div>
@endsection
