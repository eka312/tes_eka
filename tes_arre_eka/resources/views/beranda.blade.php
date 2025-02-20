<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="utf-8" />
        <meta http-equiv="X-UA-Compatible" content="IE=edge" />
        <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no" />
        <meta name="description" content="" />
        <meta name="author" content="" />
        <title>Beranda</title>
        <link href="https://cdn.jsdelivr.net/npm/simple-datatables@7.1.2/dist/style.min.css" rel="stylesheet" />
        <link href="startbootstrap-sb-admin-master/dist/css/styles.css" rel="stylesheet" />
        <script src="https://use.fontawesome.com/releases/v6.3.0/js/all.js" crossorigin="anonymous"></script>

        <!-- bagian informasi produk -->
        <!-- Favicon-->
        <link rel="icon" type="image/x-icon" href="startbootstrap-shop-homepage-master/src/assets/favicon.ico" />
        <!-- Bootstrap icons-->
        <link href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.5.0/font/bootstrap-icons.css" rel="stylesheet" />
        <!-- Core theme CSS (includes Bootstrap)-->
        <link href="startbootstrap-shop-homepage-master/dist/css/styles.css" rel="stylesheet" />
    </head>
    <body class="sb-nav-fixed">
        <nav class="sb-topnav navbar navbar-expand navbar-dark bg-primary">
            <!-- Navbar Brand-->
            <a class="navbar-brand ps-3 text-capitalize fw-bold" href="/"><img src="startbootstrap-sb-admin-master/dist/assets/img/snacks.png"> snacks nyam<sup>2</sup></a>
            <!-- Sidebar Toggle-->
            <button class="btn btn-link btn-sm order-1 order-lg-0 me-4 me-lg-0" id="sidebarToggle" href="#!"><i class="fas fa-bars"></i></button>
            
            <!-- Navbar-->
            <ul class="navbar-nav d-none d-md-inline-block form-inline ms-auto me-0 me-md-3 my-2 my-md-0">
                <li class="nav-item dropdown">
                    <a class="nav-link dropdown-toggle" id="navbarDropdown" href="#" role="button" data-bs-toggle="dropdown" aria-expanded="false"><i class="fas fa-user fa-fw"></i></a>
                    <ul class="dropdown-menu dropdown-menu-end" aria-labelledby="navbarDropdown">
                        <li><a class="dropdown-item" href="#!">Logout</a></li>
                    </ul>
                </li>
            </ul>
        </nav>
        <div id="layoutSidenav">
            <div id="layoutSidenav_nav">
                <nav class="sb-sidenav accordion sb-sidenav-light" id="sidenavAccordion">
                    <div class="sb-sidenav-menu ">
                        <div class="nav text-capitalize">
                            <a class="nav-link " href="/">
                                <div class="sb-nav-link-icon"><i class="fas fa-home"></i></div>
                                Beranda
                            </a>
                            <a class="nav-link" href="/data_produk">
                                <div class="sb-nav-link-icon"><i class="fas fa-table"></i></div>
                                data produk
                            </a>
                        </div>
                    </div>
                </nav>
            </div>
            <div id="layoutSidenav_content">
                <main>
                    <div class="container-fluid px-4 text-capitalize">
                        <h1 class="mt-4">beranda</h1>
                        <ol class="breadcrumb mb-4">
                            <li class="breadcrumb-item active">beranda</li>
                        </ol>
                        <div class="container">
                            <div class="row">
                                <div class="col-5">
                                    <img src="startbootstrap-sb-admin-master/dist/assets/img/At the office-pana.svg">
                                </div>
                                <div class="col-7">
                                    <h1 class="fw-bold"> aplikasi pengelolaan produk aneka snack</h1>
                                    <p class="text-secondary">
                                    Aplikasi ini memungkinkan anda untuk mencatat data produk, termasuk kode 
                                    produk, nama,deskripsi produk, jumlah stok, tanggal kedaluwarsa, serta harga.</p>
                                </div>
                            </div>
                            <!-- Section-->
                            <section class="py-5 mt-5 ">
                                <h2 class="text-center fw-semibold">aneka snack</h2>
                                <div class="container px-4 px-lg-5 mt-5">
                                    <div class="row gx-4 gx-lg-5 row-cols-2 row-cols-md-3 row-cols-xl-4 justify-content-center">
                                        <div class="col mb-5">
                                            <div class="card h-80 shadow">
                                                <!-- Product image-->
                                                <img class="card-img-top " src="startbootstrap-sb-admin-master/dist/assets/img/pocky.jpg" alt="pocky" />
                                                <!-- Product details-->
                                                <div class="card-body p-4">
                                                    <div class="text-center">
                                                        <!-- Product name-->
                                                        <h5 class="fw-bolder">Pocky</h5>
                                                        <!-- deskrisi  -->
                                                        <p>waffle lembut dengan coklat diatasnya</p>
                                                        <!-- Product price-->
                                                        <span class="text-muted text-decoration-line-through">Rp 2000</span>
                                                        Rp 4000
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="col mb-5">
                                            <div class="card h-80 shadow">
                                                <!-- Product image-->
                                                <img class="card-img-top " src="startbootstrap-sb-admin-master/dist/assets/img/gery.jpg" alt="bengbeng" />
                                                <!-- Product details-->
                                                <div class="card-body p-4">
                                                    <div class="text-center">
                                                        <!-- Product name-->
                                                        <h5 class="fw-bolder">Special Item</h5>
                                                        <!-- deskrisi  -->
                                                        <p>waffle lembut dengan coklat diatasnya</p>
                                                        <!-- Product price-->
                                                        <span class="text-muted text-decoration-line-through">$20.00</span>
                                                        $18.00
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="col mb-5">
                                            <div class="card h-100">
                                                <!-- Sale badge-->
                                                <div class="badge bg-dark text-white position-absolute" style="top: 0.5rem; right: 0.5rem">Sale</div>
                                                <!-- Product image-->
                                                <img class="card-img-top" src="https://dummyimage.com/450x300/dee2e6/6c757d.jpg" alt="..." />
                                                <!-- Product details-->
                                                <div class="card-body p-4">
                                                    <div class="text-center">
                                                        <!-- Product name-->
                                                        <h5 class="fw-bolder">Sale Item</h5>
                                                        <!-- Product price-->
                                                        <span class="text-muted text-decoration-line-through">$50.00</span>
                                                        $25.00
                                                    </div>
                                                </div>
                                                <!-- Product actions-->
                                                <div class="card-footer p-4 pt-0 border-top-0 bg-transparent">
                                                    <div class="text-center"><a class="btn btn-outline-dark mt-auto" href="#">Add to cart</a></div>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="col mb-5">
                                            <div class="card h-100">
                                                <!-- Product image-->
                                                <img class="card-img-top" src="https://dummyimage.com/450x300/dee2e6/6c757d.jpg" alt="..." />
                                                <!-- Product details-->
                                                <div class="card-body p-4">
                                                    <div class="text-center">
                                                        <!-- Product name-->
                                                        <h5 class="fw-bolder">Popular Item</h5>
                                                        <!-- Product reviews-->
                                                        <div class="d-flex justify-content-center small text-warning mb-2">
                                                            <div class="bi-star-fill"></div>
                                                            <div class="bi-star-fill"></div>
                                                            <div class="bi-star-fill"></div>
                                                            <div class="bi-star-fill"></div>
                                                            <div class="bi-star-fill"></div>
                                                        </div>
                                                        <!-- Product price-->
                                                        $40.00
                                                    </div>
                                                </div>
                                                <!-- Product actions-->
                                                <div class="card-footer p-4 pt-0 border-top-0 bg-transparent">
                                                    <div class="text-center"><a class="btn btn-outline-dark mt-auto" href="#">Add to cart</a></div>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="col mb-5">
                                            <div class="card h-100">
                                                <!-- Sale badge-->
                                                <div class="badge bg-dark text-white position-absolute" style="top: 0.5rem; right: 0.5rem">Sale</div>
                                                <!-- Product image-->
                                                <img class="card-img-top" src="https://dummyimage.com/450x300/dee2e6/6c757d.jpg" alt="..." />
                                                <!-- Product details-->
                                                <div class="card-body p-4">
                                                    <div class="text-center">
                                                        <!-- Product name-->
                                                        <h5 class="fw-bolder">Sale Item</h5>
                                                        <!-- Product price-->
                                                        <span class="text-muted text-decoration-line-through">$50.00</span>
                                                        $25.00
                                                    </div>
                                                </div>
                                                <!-- Product actions-->
                                                <div class="card-footer p-4 pt-0 border-top-0 bg-transparent">
                                                    <div class="text-center"><a class="btn btn-outline-dark mt-auto" href="#">Add to cart</a></div>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="col mb-5">
                                            <div class="card h-100">
                                                <!-- Product image-->
                                                <img class="card-img-top" src="https://dummyimage.com/450x300/dee2e6/6c757d.jpg" alt="..." />
                                                <!-- Product details-->
                                                <div class="card-body p-4">
                                                    <div class="text-center">
                                                        <!-- Product name-->
                                                        <h5 class="fw-bolder">Fancy Product</h5>
                                                        <!-- Product price-->
                                                        $120.00 - $280.00
                                                    </div>
                                                </div>
                                                <!-- Product actions-->
                                                <div class="card-footer p-4 pt-0 border-top-0 bg-transparent">
                                                    <div class="text-center"><a class="btn btn-outline-dark mt-auto" href="#">View options</a></div>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="col mb-5">
                                            <div class="card h-100">
                                                <!-- Sale badge-->
                                                <div class="badge bg-dark text-white position-absolute" style="top: 0.5rem; right: 0.5rem">Sale</div>
                                                <!-- Product image-->
                                                <img class="card-img-top" src="https://dummyimage.com/450x300/dee2e6/6c757d.jpg" alt="..." />
                                                <!-- Product details-->
                                                <div class="card-body p-4">
                                                    <div class="text-center">
                                                        <!-- Product name-->
                                                        <h5 class="fw-bolder">Special Item</h5>
                                                        <!-- Product reviews-->
                                                        <div class="d-flex justify-content-center small text-warning mb-2">
                                                            <div class="bi-star-fill"></div>
                                                            <div class="bi-star-fill"></div>
                                                            <div class="bi-star-fill"></div>
                                                            <div class="bi-star-fill"></div>
                                                            <div class="bi-star-fill"></div>
                                                        </div>
                                                        <!-- Product price-->
                                                        <span class="text-muted text-decoration-line-through">$20.00</span>
                                                        $18.00
                                                    </div>
                                                </div>
                                                <!-- Product actions-->
                                                <div class="card-footer p-4 pt-0 border-top-0 bg-transparent">
                                                    <div class="text-center"><a class="btn btn-outline-dark mt-auto" href="#">Add to cart</a></div>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="col mb-5">
                                            <div class="card h-100">
                                                <!-- Product image-->
                                                <img class="card-img-top" src="https://dummyimage.com/450x300/dee2e6/6c757d.jpg" alt="..." />
                                                <!-- Product details-->
                                                <div class="card-body p-4">
                                                    <div class="text-center">
                                                        <!-- Product name-->
                                                        <h5 class="fw-bolder">Popular Item</h5>
                                                        <!-- Product reviews-->
                                                        <div class="d-flex justify-content-center small text-warning mb-2">
                                                            <div class="bi-star-fill"></div>
                                                            <div class="bi-star-fill"></div>
                                                            <div class="bi-star-fill"></div>
                                                            <div class="bi-star-fill"></div>
                                                            <div class="bi-star-fill"></div>
                                                        </div>
                                                        <!-- Product price-->
                                                        $40.00
                                                    </div>
                                                </div>
                                                <!-- Product actions-->
                                                <div class="card-footer p-4 pt-0 border-top-0 bg-transparent">
                                                    <div class="text-center"><a class="btn btn-outline-dark mt-auto" href="#">Add to cart</a></div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </section>   
                        </div>
                    </div>
                </main>
                <footer class="py-4 bg-light mt-auto text-capitalize">
                    <div class="container-fluid px-4">
                        <div class="d-flex align-items-center justify-content-between small">
                            <div class="text-muted">Copyright &copy; snacks nyam<sup>2</sup> 2025</div>
                        </div>
                    </div>
                </footer>
            </div>
        </div>
        <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/js/bootstrap.bundle.min.js" crossorigin="anonymous"></script>
        <script src="startbootstrap-sb-admin-master/dist/js/scripts.js"></script>
        <script src="https://cdnjs.cloudflare.com/ajax/libs/Chart.js/2.8.0/Chart.min.js" crossorigin="anonymous"></script>
        <script src="startbootstrap-sb-admin-master/dist/assets/demo/chart-area-demo.js"></script>
        <script src="startbootstrap-sb-admin-master/dist/assets/demo/chart-bar-demo.js"></script>
        <script src="https://cdn.jsdelivr.net/npm/simple-datatables@7.1.2/dist/umd/simple-datatables.min.js" crossorigin="anonymous"></script>
        <script src="startbootstrap-sb-admin-master/dist/js/datatables-simple-demo.js"></script>

        <!-- untuk fungsi section -->
        <!-- Core theme JS-->
        <script src="startbootstrap-shop-homepage-master/src/js/scripts.js"></script>
    </body>
</html>
