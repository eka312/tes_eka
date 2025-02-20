@extends('master')

@section('judul_halaman', 'Beranda | Aplikasi Pengelolaan Produk')

@section('konten')
    <h1 class="mt-4">Beranda</h1>
    <ol class="breadcrumb mb-4">
        <li class="breadcrumb-item active">Beranda</li>
    </ol>
    <div class="container">
        <div class="row">
            <div class="col-5">
                <img src="startbootstrap-sb-admin-master/dist/assets/img/At the office-pana.svg">
            </div>
            <div class="col-7">
                <h1 class="fw-bold">Aplikasi Pengelolaan Produk Aneka Snack</h1>
                <p class="text-secondary">
                    Aplikasi ini memungkinkan Anda untuk mencatat data produk, termasuk kode 
                    produk, nama, deskripsi produk, jumlah stok, tanggal kedaluwarsa, serta harga.
                </p>
            </div>
        </div>
        <!-- Section-->
        <section class="py-5 mt-4">
            <h2 class="fw-bold text-center"> aneka snack</h2>
            <div class="container px-lg-5 mt-4">
                <div class="row gx-4 gx-lg-5 row-cols-2 row-cols-md-3 row-cols-xl-4 justify-content-center">
                    <div class="col mb-5">
                        <div class="card h-70 shadow">
                            <!-- Product image-->
                            <img class="card-img-top" src="startbootstrap-sb-admin-master/dist/assets/img/pocky.jpg" alt="pocky" />
                            <!-- Product details-->
                            <div class="card-body">
                                <div class="">
                                    <!-- Product name-->
                                    <h5 class="fw-bolder">pocky</h5>

                                    <p class="text-secondary">stik biskuit renyah yang dilapisi berbagai rasa, seperti cokelat, stroberi, matcha, dan masih banyak lagi.</p>

                                    <!-- Product price-->
                                    <small class="text-secondary">Rp 5000</small>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col mb-5">
                        <div class="card h-70 shadow">
                            <!-- Product image-->
                            <img class="card-img-top" src="startbootstrap-sb-admin-master/dist/assets/img/basreng_kering.jpg" alt="basreng kering" />
                            <!-- Product details-->
                            <div class="card-body">
                                <div class="">
                                    <!-- Product name-->
                                    <h5 class="fw-bolder">basreng kering</h5>

                                    <p class="text-secondary">terbuat dari irisan tipis bakso ikan yang digoreng hingga renyah dan dibumbui dengan cabai pedas.</p>

                                    <!-- Product price-->
                                    <small class="text-secondary">Rp 5000</small>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col mb-5">
                        <div class="card h-70 shadow">
                            <!-- Product image-->
                            <img class="card-img-top" src="startbootstrap-sb-admin-master/dist/assets/img/chitato.jpg" alt="chitato" />
                            <!-- Product details-->
                            <div class="card-body">
                                <div class="">
                                    <!-- Product name-->
                                    <h5 class="fw-bolder">chitato</h5>

                                    <p class="text-secondary pb-4">cemilan kentang berbentuk bergelombang dengan rasa sapi panggang</p>

                                    <!-- Product price-->
                                    <small class="text-secondary">Rp 6000</small>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col mb-5">
                        <div class="card h-70 shadow" >
                            <!-- Product image-->
                            <img class="card-img-top" style="height:200px" src="startbootstrap-sb-admin-master/dist/assets/img/waffle.jpg" alt="dilan waffle" />
                            <!-- Product details-->
                            <div class="card-body">
                                <div class="">
                                    <!-- Product name-->
                                    <h5 class="fw-bolder">dilan waffle</h5>

                                    <p class="text-secondary">kue lembut berbentuk waffle rasa coklat yang enak,terdapat rasa cokelat khas Dilan, dan krim vanila.</p>

                                    <!-- Product price-->
                                    <small class="text-secondary">rp 2000</small>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col mb-5">
                        <div class="card h-70 shadow">
                            <!-- Product image-->
                            <img class="card-img-top" src="startbootstrap-sb-admin-master/dist/assets/img/gery.jpg" alt="gery" />
                            <!-- Product details-->
                            <div class="card-body">
                                <div class="">
                                    <!-- Product name-->
                                    <h5 class="fw-bolder">gery</h5>

                                    <p class="text-secondary"> biskuit berbentuk bantal rasa coklat yang lezat yang dapat dinikmati sebagai sereal</p>

                                    <!-- Product price-->
                                    <small class="text-secondary">rp 1000</small>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col mb-5">
                        <div class="card h-70 shadow">
                            <!-- Product image-->
                            <img class="card-img-top"  src="startbootstrap-sb-admin-master/dist/assets/img/dairy_milk.jpg" alt="dairy_milk" />
                            <!-- Product details-->
                            <div class="card-body">
                                <div class="">
                                    <!-- Product name-->
                                    <h5 class="fw-bolder">dairy milk</h5>

                                    <p class="text-secondary">Cokelat susu Terbuat dari coklat, susu, dan Memiliki kandungan satu setengah gelas susu pada tiap bar-nya</p>

                                    <!-- Product price-->
                                    <small class="text-secondary">rp 18000</small>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col mb-5">
                        <div class="card h-70 shadow">
                            <!-- Product image-->
                            <img class="card-img-top" src="startbootstrap-sb-admin-master/dist/assets/img/biskuat_bolu.jpg" alt="biskuat bolu" />
                            <!-- Product details-->
                            <div class="card-body">
                                <div class="">
                                    <!-- Product name-->
                                    <h5 class="fw-bolder">biskuat bolu</h5>

                                    <p class="text-secondary">kue bolu cokelat lembut dengan isian krim coklat yang lezat, Berbentuk Bolu atau sponge cake</p>

                                    <!-- Product price-->
                                    <small class="text-secondary">rp 2000</small>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col mb-5">
                        <div class="card h-70 shadow">
                            <!-- Product image-->
                            <img class="card-img-top" src="startbootstrap-sb-admin-master/dist/assets/img/tango.jpg" alt="tango" />
                            <!-- Product details-->
                            <div class="card-body">
                                <div class="">
                                    <!-- Product name-->
                                    <h5 class="fw-bolder">wafer tango</h5>

                                    <p class="text-secondary"> wafer yang memiliki tekstur yang renyah diolah menggunakan bahan-bahan gandum dan susu</p>

                                    <!-- Product price-->
                                    <small class="text-secondary">rp 3000</small>
                                </div>
                            </div>
                        </div>
                    </div>
                    
                </div>
            </div>
        </section>
    </div>
@endsection
