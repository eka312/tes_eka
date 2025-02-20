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
        <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.7.2/css/all.min.css" integrity="sha512-Evv84Mr4kqVGRNSgIGL/F/aIDqQb7xQ2vcrdIwxfjThSH8CSR7PBEakCr51Ck+w+/U6swU2Im1vVX0SVk9ABhg==" crossorigin="anonymous" referrerpolicy="no-referrer" />
        <script src="https://use.fontawesome.com/releases/v6.3.0/js/all.js" crossorigin="anonymous"></script>
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
                <nav class="sb-sidenav accordion sb-sidenav-light " id="sidenavAccordion">
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
                        <h1 class="mt-4">data produk</h1>
                        <nav style="--bs-breadcrumb-divider: url(&#34;data:image/svg+xml,%3Csvg xmlns='http://www.w3.org/2000/svg' width='8' height='8'%3E%3Cpath d='M2.5 0L1 1.5 3.5 4 1 6.5 2.5 8l4-4-4-4z' fill='%236c757d'/%3E%3C/svg%3E&#34;);" aria-label="breadcrumb">
                            <ol class="breadcrumb">
                                <li class="breadcrumb-item"><a href="/">beranda</a></li>
                                <li class="breadcrumb-item active" aria-current="page">data produk</li>
                            </ol>
                        </nav>

                      
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
                                            <th>harga per biji</th>
                                            <th>harga per pak</th>
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
                                                <td>{{$item->harga_per_biji}}</td>
                                                <td>{{$item->harga_per_pak}}</td>
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
    </body>
</html>
