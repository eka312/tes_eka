<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="utf-8" />
        <meta http-equiv="X-UA-Compatible" content="IE=edge" />
        <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no" />
        <meta name="description" content="" />
        <meta name="author" content="" />
        <title>Login | Aplikasi Pengelolaan Produk</title>
        <link href="template-admin/dist/css/styles.css" rel="stylesheet" />
        <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet"
          integrity="sha384-iYQeCzEYFbKjA/T2uDLTpkwGzCiq6soy8tYaI1GyVh/UjpbCx/TYkiZhlZB6+fzT" crossorigin="anonymous">
        <script src="https://use.fontawesome.com/releases/v6.3.0/js/all.js" crossorigin="anonymous"></script>
    </head>
    <body class="bg-primary">
        <div id="layoutAuthentication">
            <div id="layoutAuthentication_content">
                <main>
                    <div class="container">
                        <div class="row justify-content-center">
                            <div class="col-lg-5">
                            <div class="card shadow-lg border-0 rounded-lg mt-5">
                                <div class="card-header"><h3 class="text-center font-weight-light my-4">Login</h3></div>
                                    <div class="card-body">
                                        <!-- <form  action="/login" method="post" >
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
                                            <div class="form-floating mb-3 ">
                                                <input class="form-control is-invalid" name="email" id="inputEmail" type="email" placeholder="name@example.com" required>
                                                <label for="inputEmail">Email</label>
                                            </div>
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

                                        </form> -->
                                        <form action="/login" method="post">
                                            @csrf
                                            <div class="mb-3">
                                                <label for="email" class="form-label">Email address</label>
                                                <input type="email" class="form-control @error('email') is-invalid @enderror" id="email"
                                                    name="email" placeholder="name@example.com" >
                                                @error('email')
                                                <div class="invalid-feedback">
                                                    gagal menginput
                                                </div>
                                                @enderror
                                            </div>
                                            <div class="mb-3">
                                                <label for="password" class="form-label">Password</label>
                                                <input type="password" class="form-control @error('password') is-invalid @enderror" id="password" name="password" placeholder="password">
                                                @error('password')
                                                <div class="invalid-feedback">
                                                    gagal menginput
                                                </div>
                                                @enderror
                                            </div>
                                            <div class="mb-3 d-grid mx-auto">
                                                <input type="submit" class="btn btn-primary" value="Login">
                                            </div>
                                        </form>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </main>
            </div>
            <div id="layoutAuthentication_footer">
                <footer class="py-4 bg-light mt-auto text-capitalize">
                    <div class="container-fluid px-4">
                        <div class="d-flex align-items-center justify-content-between small">
                            <div class="text-muted">Copyright &copy; snacks nyam<sup>2</sup> 2025</div>
                        </div>
                    </div>
                </footer>
            </div>
        </div>
        <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-u1OknCvxWvY5kfmNBILK2hRnQC3Pr17a+RTT6rIHI7NnikvbZlHgTPOOmMi466C8" crossorigin="anonymous"></script>
        <script src="template-admin/dist/js/scripts.js"></script>
    </body>
</html>
