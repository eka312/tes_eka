@extends('bg_login')

@section('judul_halaman', 'Login | Aplikasi Pengelolaan Produk')

@section('konten')
    <div class="card shadow-lg border-0 rounded-lg mt-5">
        <div class="card-header"><h3 class="text-center font-weight-light my-4">Login</h3></div>
        <div class="card-body">
            <form  action="/login" method="post">
                <div class="form-floating mb-3">
                    <input class="form-control" id="inputEmail" type="email" placeholder="name@example.com" />
                    <label for="inputEmail">Email</label>
                </div>
                <div class="form-floating mb-3">
                    <input class="form-control" id="inputPassword" type="password" placeholder="Password" />
                    <label for="inputPassword">Password</label>
                </div>
                <div class="form-check mb-3">
                    <input class="form-check-input" id="inputRememberPassword" type="checkbox" value="" />
                    <label class="form-check-label" for="inputRememberPassword">Ingat Kata Sandi</label>
                </div>
                <div class="d-flex align-items-center justify-content-between mt-4 mb-0">
                    <a class="small" href="password.html">Lupa Kata Sandi?</a>
                    <a class="btn btn-primary" href="index.html">Login</a>
                </div>
            </form>
        </div>
        <div class="card-footer text-center py-3">
            <div class="small"><a href="register.html">Butuh akun? Daftar sekarang!</a></div>
        </div>
    </div>
@endsection
