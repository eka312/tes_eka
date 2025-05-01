<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="utf-8" />
        <meta http-equiv="X-UA-Compatible" content="IE=edge" />
        <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no" />
        <meta name="description" content="" />
        <meta name="author" content="" />
        <title>Data Suplayer | Aplikasi DigiStore Manager</title>

        <!-- Bootstrap CSS -->
        <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" crossorigin="anonymous">

        <!-- Simple DataTables -->
        <link href="https://cdn.jsdelivr.net/npm/simple-datatables@7.1.2/dist/style.min.css" rel="stylesheet" />

        <!-- SB Admin Styles -->
        <link href="../asset/css/styles.css" rel="stylesheet" />

        <!-- FontAwesome (untuk ikon) -->
        <script src="https://use.fontawesome.com/releases/v6.3.0/js/all.js" crossorigin="anonymous"></script>


        <!-- bagian informasi produk -->
        <!-- Favicon-->
        <link rel="icon" type="image/x-icon" href="../asset/img/laptop.png" />
        <!-- Bootstrap icons-->
        <link href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.5.0/font/bootstrap-icons.css" rel="stylesheet" />
        <!-- Core theme CSS (includes Bootstrap)-->
        <link rel="stylesheet" href="../asset/css/cssShop/styles.css">
    </head>
    <body class="sb-nav-fixed">
        <nav class="sb-topnav navbar navbar-expand navbar-dark bg-primary">
            <!-- Navbar Brand-->
            <a class="navbar-brand ps-3 text-capitalize fw-bold" href="../index.html"><img src="../asset/img/laptop.png"> DigiStore<sup>manager</sup></a>
            <!-- Sidebar Toggle-->
            <button class="btn btn-link btn-sm order-1 order-lg-0 me-4 me-lg-0" id="sidebarToggle" href="#!"><i class="fas fa-bars"></i></button>
            
            <!-- Navbar-->
            <ul class="navbar-nav d-none d-md-inline-block form-inline ms-auto me-0 me-md-3 my-2 my-md-0">
                <li class="nav-item dropdown">
                    <a class="nav-link dropdown-toggle" id="navbarDropdown" href="#" role="button" data-bs-toggle="dropdown" aria-expanded="false"><i class="fas fa-user fa-fw"></i></a>
                    <ul class="dropdown-menu dropdown-menu-end" aria-labelledby="navbarDropdown">
                        <li><a class="dropdown-item" href="../auth/login.html">Login</a></li>
                        <li><a class="dropdown-item" href="../auth/register.html">Register</a></li>
                        <li><a class="dropdown-item" href="#" data-bs-toggle="modal" data-bs-target="#exampleModal">Log Out</a></li>
                    </ul>
                </li>
            </ul>
            
        </nav>
        <div id="layoutSidenav">
            <div id="layoutSidenav_nav">
                <nav class="sb-sidenav accordion sb-sidenav-light" id="sidenavAccordion">
                    <div class="sb-sidenav-menu ">
                        <div class="nav text-capitalize">
                            <a class="nav-link " href="../index.html">
                                <div class="sb-nav-link-icon"><i class="fas fa-home"></i></div>
                                Beranda
                            </a>
                                <a class="nav-link" href="../suplayer/data_suplayer.html">
                                    <div class="sb-nav-link-icon"><i class="fas fa-building"></i></div>
                                    data suplayer
                                </a>
                                <a class="nav-link" href="../laptop/data_laptop.html">
                                    <div class="sb-nav-link-icon"><i class="fas fa-laptop"></i></div>
                                    data laptop
                                </a>
                                <a class="nav-link" href="../pembeli/data_pembeli.html">
                                    <div class="sb-nav-link-icon"><i class="fas fa-users"></i></div>
                                    data pembeli
                                </a>
                                <a class="nav-link" href="../transaksi/data_transaksi.html">
                                    <div class="sb-nav-link-icon"><i class="fas fa-receipt"></i></div>
                                    data transaksi
                                </a>

                        </div>
                    </div>
                </nav>
            </div>
            <div id="layoutSidenav_content">
                <main>
                    <div class="container-fluid px-4 text-capitalize">
                        <h1 class="mt-4">data suplayer</h1>
                        <nav style="--bs-breadcrumb-divider: url(&#34;data:image/svg+xml,%3Csvg xmlns='http://www.w3.org/2000/svg' width='8' height='8'%3E%3Cpath d='M2.5 0L1 1.5 3.5 4 1 6.5 2.5 8l4-4-4-4z' fill='%236c757d'/%3E%3C/svg%3E&#34;);" aria-label="breadcrumb">
                            <ol class="breadcrumb">
                                <li class="breadcrumb-item"><a href="../index.html">beranda</a></li>
                                <li class="breadcrumb-item active" aria-current="page">data suplayer</li>
                            </ol>
                        </nav>   
                            
                        <!-- bagian car dan tabel -->
                        <div class="card mb-4">
                            <div class="card-header bg-light">
                                <div class="d-flex">
                                    <div class="flex-grow-1 d-flex align-items-center">
                                        <i class="fas fa-table me-1"></i>
                                        daftar data suplayer
                                    </div>
                                    <div>
                                        <a class="btn btn-primary btn-sm" href="tambah_suplayer.html" role="button"><i class="fas fa-add me-2"></i>Tambah</a>
                                    </div>
                                </div>
                            </div>
                            <div class="card-body">
                                <table id="datatablesSimple">
                                    <thead>
                                        <tr>
                                            <th>No</th>
                                            <th>suplayer</th>
                                            <th>alamat</th>
                                            <th>aksi</th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                            <tr>
                                                <th scope="row">1</th>
                                                <td>sobat laptop</td>
                                                <td>Jl. Merdeka No. 10, Jakarta</td>
                                                <td>
                                                    <a class="btn btn-warning btn-sm" href="ubah_suplayer.html" role="button"><i class="fas fa-edit me-2"></i>ubah</a>
                                                    <a class="btn btn-danger btn-sm" href="#" onclick="return confirm('apakah anda yakin ingin menghapus data ini?');" role="button"><i class="fas fa-trash me-2"></i>Hapus</a>
                                                </td>
                                            </tr>
                                    </tbody>
                                </table>
                            </div>
                        </div>
                    </div>
                </main>
                <footer class="py-4 bg-primary mt-auto ">
                    <div class="container-fluid px-5" >
                        <div class="row text-light gap-3">
                            <div class="col">
                                <h6>Tentang</h6>
                                <p class="small"><strong>DIGISTORE MANAGER</strong> DigiStore Manager adalah aplikasi manajemen data laptop yang 
                                memudahkan pencatatan nama, spesifikasi, stok, dan harga produk. Dengan fitur pemantauan ketersediaan barang 
                                secara real-time serta pengelolaan transaksi yang efisien, aplikasi ini membantu pemilik toko dalam mengontrol 
                                inventaris dan mencatat penjualan dengan lebih akurat.
                                </p>
                                <h6>HUBUNGI KAMI</h6>
                                <h8>Klik : </h8>
                                  <a href="https://wa.me/085932512828" target="_blank" style="text-decoration: none; margin: 0 10px;">
                                      <img src="https://upload.wikimedia.org/wikipedia/commons/6/6b/WhatsApp.svg" width="40" alt="WhatsApp">
                                  </a>
                                  <a href="https://www.instagram.com/silviaeka312" target="_blank" style="text-decoration: none; margin: 0 10px;">
                                      <img src="https://upload.wikimedia.org/wikipedia/commons/a/a5/Instagram_icon.png" width="40" alt="Instagram">
                                  </a>
                            </div>
                            <div class="col">
                                <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3950.168755049892!2d112.31908827412548!3d-8.08426608082519!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x2e7893ebbab3e161%3A0xa8678f8ba8253eb4!2sSMK%20PGRI%20Wlingi!5e0!3m2!1sid!2sid!4v1741225955946!5m2!1sid!2sid" width="500" height="220" style="border:0;" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe>
                            </div>
                        </div>
                        <div class="d-flex align-items-center justify-content-between small">
                            <div class="text-light">Copyright &copy;DigiStore Manager 2025</div>
                        </div>
                    </div>
                </footer>
            </div>
        </div>

        <!-- Modal -->
        <div class="modal fade" id="exampleModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
            <div class="modal-dialog modal-dialog-centered">
                <div class="modal-content">
                    <div class="modal-header">
                        <h1 class="modal-title fs-5 text-center" id="exampleModalLabel">Logout</h1>
                        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                    </div>
                    <div class="modal-body">
                        Apakah anda yakin ingin logout dari aplikasi ini?
                    </div>
                    <div class="modal-footer">
                        <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Batal</button>
                        <form action="#" method="post">
                            <input type="submit" class="btn btn-danger" value="Logout">
                        </form>
                    </div>
                </div>
            </div>
        </div>

        <!-- Bootstrap -->
        <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js" crossorigin="anonymous"></script>

        <!-- Script utama aplikasi -->
        <script src="../js/scripts.js"></script>

        <!-- DataTables -->
        <script src="https://cdn.jsdelivr.net/npm/simple-datatables@7.1.2/dist/umd/simple-datatables.min.js" crossorigin="anonymous"></script>
        <script src="../js/datatables-simple-demo.js"></script>

        <!-- untuk fungsi section -->
        <!-- Core theme JS-->
        <script src="../js/js_shop/src/js/scripts.js"></script>

        
    </body>
</html>
