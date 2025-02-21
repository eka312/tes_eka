@extends('bg_login')

@section('judul_halaman', 'Login | Aplikasi Pengelolaan Produk')

@section('konten')
    <div class="card shadow-lg border-0 rounded-lg mt-5">
        <div class="card-header"><h3 class="text-center font-weight-light my-4">Login</h3></div>
        <div class="card-body">
            <form  action="/login" method="post" >
                @csrf
                @error('email')
                    <small class="text-danger">{{$message}}</small>
                @enderror
                <div class="input-group has-validation mb-3">
                    <div class="form-floating is-invalid">
                        <input type="text" name="email" class="form-control is-invalid" id="floatingInputGroup2" placeholder="email" required>
                        <label for="floatingInputGroup2">email</label>
                    </div>
                    <div class="invalid-feedback">
                        Please choose a username.
                    </div>
                </div>
                <!-- <div class="form-floating mb-3 ">
                    <input class="form-control is-invalid" name="email" id="inputEmail" type="email" placeholder="name@example.com" required>
                    <label for="inputEmail">Email</label>
                </div> -->
                <div class="form-floating mb-3">
                    <input class="form-control is-invalid" name="password" id="inputPassword" type="password" placeholder="Password" required>
                    <label for="inputPassword">Password</label>
                </div>
                <div class="form-check mb-3">
                    <input class="form-check-input" name="remember" id="inputRememberPassword" type="checkbox" value="" required>
                    <label class="form-check-label" for="inputRememberPassword">Ingat Kata Sandi</label>
                </div>
                <div class="d-grid mt-4 mb-0">
                    <a class="btn btn-primary" href="#" type="button">Login</a>
                </div>

            </form>
        </div>
    </div>
@endsection
