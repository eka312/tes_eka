@extends('templating.master')

@section('judul_halaman', 'Beranda | Aplikasi DigiStore Manager')

@section('konten')
    <h1 class="mt-4">Beranda</h1>
    <ol class="breadcrumb mb-4">
        <li class="breadcrumb-item active">Beranda</li>
    </ol>
    <div class="container">
        <div class="row">
            <div class="col-5">
                <img src="{{asset('template-admin/dist/assets/img/At the office-pana.svg')}}">
            </div>
            <div class="col-7">
                <h1 class="fw-bold">Aplikasi DigiStore Manager</h1>
                <p class="text-secondary">
                Aplikasi DigiStore Manager memungkinkan Anda untuk mengelola data laptop dengan mudah, 
                termasuk pencatatan nama laptop, spesifikasi, jumlah stok, serta 
                harga. Selain itu, aplikasi ini juga membantu dalam pemantauan ketersediaan produk dan 
                pengelolaan transaksi secara efisien.
                </p>
            </div>
        </div>
        <!-- Section-->
        <section class="py-5 mt-4">
            <h2 class="fw-bold text-center"> Sekilas Mengenai Data Produk </h2>
            <div class="container px-lg-5 mt-4">
                <div class="row gx-4 gx-lg-5 row-cols-2 row-cols-md-3 row-cols-xl-4 justify-content-center">
                    <div class="col mb-5">
                        <div class="card h-100 shadow">
                            <!-- Product image-->
                            <img class="card-img-top"  src="{{asset('template-admin/dist/assets/img/Asus_ROG_Strix_G15.jpg')}}" />
                            <!-- Product details-->
                            <div class="card-body">
                                <div class="">
                                    <!-- Product name-->
                                    <h5 class="fw-bolder">Asus ROG Strix G15</h5>

                                    <p class="text-secondary">
                                        Laptop gaming dengan prosesor AMD Ryzen 7 dan RTX 3060, cocok untuk gaming dan editing.
                                    </p>

                                    <!-- Product price-->
                                    <small class=" text-secondary">Rp 20.000.000</small>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col mb-5">
                        <div class="card h-100 shadow">
                            <!-- Product image-->
                            <img class="card-img-top"  src="{{asset('template-admin/dist/assets/img/MacBook_Air_M2.jpg')}}" />
                            <!-- Product details-->
                            <div class="card-body">
                                <!-- Product name-->
                                <h5 class="fw-bolder">MacBook Air M2</h5>

                                <p class="text-secondary pb-5">Laptop ringan dengan chip Apple M2, layar Retina, dan daya tahan baterai hingga 18 jam.</p>
                                <!-- Product price-->
                                <small class="text-secondary">Rp 18.500.000</small>
                                
                            </div>
                        </div>
                    </div>
                    <div class="col mb-5">
                        <div class="card h-100 shadow">
                            <!-- Product image-->
                            <img class="card-img-top" src="{{asset('template-admin/dist/assets/img/Acer_Predator_Helios_300.jpg')}}" />
                            <!-- Product details-->
                            <div class="card-body">
                                <div class="">
                                    <!-- Product name-->
                                    <h5 class="fw-bolder">Acer Predator Helios 300</h5>

                                    <p class="text-secondary">Laptop gaming dengan Intel Core i7 dan RTX 30100, layar 144Hz untuk pengalaman bermain optimal.</p>

                                    <!-- Product price-->
                                    <small class="text-secondary">Rp 22.000.000</small>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col mb-5">
                        <div class="card h-100 shadow" >
                            <!-- Product image-->
                            <img class="card-img-top" src="{{asset('template-admin/dist/assets/img/Dell_XPS_13.jpg')}}" alt="dilan waffle" />
                            <!-- Product details-->
                            <div class="card-body">
                                <div class="">
                                    <!-- Product name-->
                                    <h5 class="fw-bolder">Dell XPS 13</h5>

                                    <p class="text-secondary pb-4">Laptop premium dengan layar 13.4” 4K UHD dan desain bezel tipis. Sangat cocok untuk profesional.</p>

                                    <!-- Product price-->
                                    <small class="text-secondary">rp 25.000.000</small>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col mb-5">
                        <div class="card h-100 shadow">
                            <!-- Product image-->
                            <img class="card-img-top" src="{{asset('template-admin/dist/assets/img/Lenovo_Legion_5_Pro.jpg')}}" alt="gery" />
                            <!-- Product details-->
                            <div class="card-body">
                                <div class="">
                                    <!-- Product name-->
                                    <h5 class="fw-bolder">Lenovo Legion 5 Pro</h5>

                                    <p class="text-secondary">Laptop gaming dengan AMD Ryzen 7 dan RTX 30100, layar 165Hz untuk performa luar biasa.</p>

                                    <!-- Product price-->
                                    <small class="text-secondary">rp 21.000.000</small>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col mb-5">
                        <div class="card h-100 shadow">
                            <!-- Product image-->
                            <img class="card-img-top"  src="{{asset('template-admin/dist/assets/img/HP_Spectre_x360.jpg')}}" alt="dairy_milk" />
                            <!-- Product details-->
                            <div class="card-body">
                                <div class="">
                                    <!-- Product name-->
                                    <h5 class="fw-bolder">HP Spectre x360</h5>

                                    <p class="text-secondary">Laptop 2-in-1 dengan layar OLED 13.5” yang bisa dilipat, cocok untuk kerja dan desain.</p>

                                    <!-- Product price-->
                                    <small class="text-secondary">rp 19.500.000</small>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col mb-5">
                        <div class="card h-100 shadow">
                            <!-- Product image-->
                            <img class="card-img-top" src="{{asset('template-admin/dist/assets/img/MSI_GF63_Thin.jpg')}}" alt="biskuat bolu" />
                            <!-- Product details-->
                            <div class="card-body">
                                <div class="">
                                    <!-- Product name-->
                                    <h5 class="fw-bolder">MSI GF63 Thin</h5>

                                    <p class="text-secondary pb-4">Laptop gaming budget dengan Intel Core i5 dan GTX 1650, cocok untuk gamer pemula.</p>

                                    <!-- Product price-->
                                    <small class="text-secondary">rp 13.500.000</small>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col mb-5">
                        <div class="card h-100 shadow">
                            <!-- Product image-->
                            <img class="card-img-top" src="{{asset('template-admin/dist/assets/img/Microsoft_Surface_Laptop_5.jpg')}}" alt="tango" />
                            <!-- Product details-->
                            <div class="card-body">
                                <div class="">
                                    <!-- Product name-->
                                    <h5 class="fw-bolder pt-3">Microsoft Surface Laptop 5</h5>

                                    <p class="text-secondary pb-4">Laptop ringan dengan desain premium dan layar touchscreen, ideal untuk bisnis dan produktivitas.</p>

                                    <!-- Product price-->
                                    <small class="text-secondary">rp 20.000.000</small>
                                </div>
                            </div>
                        </div>
                    </div>
                    
                </div>
            </div>
        </section>
    </div>
@endsection
