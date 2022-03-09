@extends('guest.layout.app')

@section('namePage', 'Home')

@section('content')
<!-- Header -->
<header id="header" class="header">
    <div class="container">
        <div class="row">
            <div class="col-lg-6 col-xl-5">
                <div class="text-container">
                    <div class="section-title">Selamat datang di web CV. RPC KARYA </div>
                    <h1 class="h1-large">@if($tentang != null){{$tentang->judul}}@else{{"Tentang Kami"}}@endif</h1>
                    <p class="p-large">@if($tentang != null){!! $tentang->desc !!}@else{{"CV. RPC KARYA yang berdiri sejak tahun 2018 merupakan salah satu perusahaan Nasional di Kabupaten Purbalingga, Jawa Tengah yang terjun dalam bisnis bidang pengadaan barang dan jasa terutama alam bidang konstruksi. Perusahaan kami menawarkan kerja sama dengan berbagai perusahaan Nasional maupun Pemerintah pada berbagai bentuk pekerjaan sesuai bidang keahlian kami."}}@endif</p>
                    <a class="btn-solid-lg" href="#contact">Hubungi Kami</a>
                    <a class="quote" href="@if($profile != null){{$profile->walink}}@else{{'https://wa.me/6281903100766'}}@endif" target="_blank"><i class="fab fa-whatsapp"></i>whatsapp</a>

                </div> <!-- end of text-container -->
            </div> <!-- end of col -->
            <div class="col-lg-6 col-xl-7">
                <div class="image-container">
                    <img class="img-fluid" src="@if($tentang != null && $tentang->img != null){{asset('images/tentang/'.$tentang->img)}}@else{{asset('images/main-illustration.jpg')}}@endif" alt="Tentang kami CV RPC KARYA Home">
                </div> <!-- end of image-container -->
            </div> <!-- end of col -->
        </div> <!-- end of row -->
    </div> <!-- end of container -->
</header> <!-- end of header -->
<!-- end of header -->


<!-- Services -->
<div id="services" class="cards-1 ">
    <div class="container">
        <div class="row">
            <div class="col-lg-12">

                <!-- Card -->
                <div class="card ">
                    <div class="card-icon blue">
                        <span class="far fa-file-alt"></span>


                    </div>
                    <div class="card-body">
                        <h5 class="card-title">Visi</h5>
                        <ul class="list-unstyled li-space-lg">
                            <li class="d-flex">
                                <i class="fas fa-check"></i>
                                <div class="flex-grow-1">Menjadi mitra yang handal</div>
                            </li>
                            <li class="d-flex">
                                <i class="fas fa-check"></i>
                                <div class="flex-grow-1">Terpercaya dalam pekerjaan
                                    konstruksi</div>
                            </li>
                            <li class="d-flex">
                                <i class="fas fa-check"></i>
                                <div class="flex-grow-1">Senantiasa
                                    mengedepankan
                                    kualitas</div>
                            </li>
                            <li class="d-flex">
                                <i class="fas fa-check"></i>
                                <div class="flex-grow-1">Menerepakan teknologi
                                    terkini</div>
                            </li>
                        </ul>
                    </div>
                </div>
                <!-- end of card -->

                <!-- Card -->
                <div class="card">
                    <div class="card-icon yellow">
                        <span class="fas fa-chart-line"></span>

                    </div>
                    <div class="card-body">
                        <h5 class="card-title">Misi</h5>
                        <ul class="list-unstyled li-space-lg">
                            <li class="d-flex">
                                <i class="fas fa-check"></i>
                                <div class="flex-grow-1">Membangun budaya dan
                                    hubungan kerja yang kondusif dan harmonis </div>
                            </li>
                            <li class="d-flex">
                                <i class="fas fa-check"></i>
                                <div class="flex-grow-1">Menghasilkan produk yang
                                    ergonomis dan aman digunakan
                                    pengguna</div>
                            </li>
                            <li class="d-flex">
                                <i class="fas fa-check"></i>
                                <div class="flex-grow-1">Menghasilkan produk berkualitas</div>
                            </li>
                            <li class="d-flex">
                                <i class="fas fa-check"></i>
                                <div class="flex-grow-1">Memberikan kepuasan
                                    pelanggan</div>
                            </li>
                        </ul>
                    </div>
                </div>
                <!-- end of card -->

                <!-- Card -->
                <!-- <div class="card">
                        <div class="card-icon red">
                            <span class="fas fa-gift"></span>
                        </div>
                        <div class="card-body">
                            <h5 class="card-title">Online shop</h5>
                            <p>Nullam lobortis porta diam, vitae dictum metus placerat luctus bora</p>
                            <ul class="list-unstyled li-space-lg">
                                <li class="d-flex">
                                    <i class="fas fa-check"></i>
                                    <div class="flex-grow-1">Sed laoreet blandit mollis ne</div>
                                </li>
                                <li class="d-flex">
                                    <i class="fas fa-check"></i>
                                    <div class="flex-grow-1">Mauris non luctus est quisquerm</div>
                                </li>
                                <li class="d-flex">
                                    <i class="fas fa-check"></i>
                                    <div class="flex-grow-1">Mattis dapibus quisque tristique</div>
                                </li>
                                <li class="d-flex">
                                    <i class="fas fa-check"></i>
                                    <div class="flex-grow-1">Cursus lacus interdum sollicdn</div>
                                </li>
                            </ul>
                        </div>
                    </div> -->
                <!-- end of card -->

            </div> <!-- end of col -->
        </div> <!-- end of row -->
    </div> <!-- end of container -->
</div> <!-- end of cards-1 -->
<!-- end of services -->


<!-- Details 1 -->
<div id="details" class="basic-1">
    <div class="container">
        <div class="row">
            <div class="col-lg-6 col-xl-7">
                <div class="image-container">
                    <img class="img-fluid" src="@if($solusi != null){{asset('images/solusi/'.$solusi->img)}}@else{{asset('images/Tambahan/rumah.png')}}@endif" alt="Solusi CV RPC KARYA Home">
                </div> <!-- end of image-container -->
            </div> <!-- end of col -->
            <div class="col-lg-6 col-xl-5">
                <div class="text-container">
                    <h2>@if($solusi != null){{$solusi->judul}}@else{!!"<span>Solusi tepat untuk</span><br> Kebutuhan konstruksi"!!}@endif</h2>
                    <p>@if($solusi != null){{$solusi->desc}}@else{!! "CV RPC KARYA siap bekerja sama dengan semua instansi dan seluruh sektor yang terkait di dalam bidang Jasa Konstruksi dan Pemasok Barang baik Swasta maupun Pemerintah dengan penuh tanggung jawab dan saling menguntungkan.
                    <p>Perusahaan kami bergerak di bidang Pengadaan Jasa Konstruksi yang meliputi Pembangunan : Gedung Bertingkat, Hunian, Irigasi, Jalan Raya, dan Konstruksi lainya. </p>" !!}@endif
                    </p>
                    <a class="btn-solid-reg" data-bs-toggle="modal" data-bs-target="#staticBackdrop">Strategi
                        Kami</a>
                </div> <!-- end of text-container -->
            </div> <!-- end of col -->
        </div> <!-- end of row -->
    </div> <!-- end of container -->
</div> <!-- end of basic-1 -->
<!-- end of details 1 -->


<!-- Details Modal -->
<div id="staticBackdrop" class="modal fade" tabindex="-1" aria-hidden="true">
    <div class="modal-dialog">
        <div class="modal-content">
            <div class="row">
                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                <div class="col-lg-8">
                    <div class="image-container">
                        <img class="img-fluid" src="@if($solusi != null && $solusi->imgStrategi != null){{asset('images/solusi/'.$solusi->imgStrategi)}}@else{{asset('images/Tambahan/strategy.jpg')}}@endif" alt="Strategi CV RPC KARYA Home">
                    </div> <!-- end of image-container -->
                </div> <!-- end of col -->
                <div class="col-lg-4">
                    <h3>@if($solusi != null){{$solusi->judulStrategi}}@else{{"STRATEGI PERUSAHAAN"}}@endif</h3>
                    <hr>
                    <p>
                        @if($solusi != null){{$solusi->strategi}}@else{{'<ul class="list-unstyled li-space-lg">
                        <li class="d-flex">
                            <i class="fas fa-chevron-right"></i>
                            <div class="flex-grow-1">Optimalisasi SDM untuk memperluas
                                jaringan dan mendapatkan harga yang
                                kompetitif.
                            </div>
                        </li>
                        <li class="d-flex">
                            <i class="fas fa-chevron-right"></i>
                            <div class="flex-grow-1">Joint Operation dengan perusahaan
                                lain dan dapat memperoleh pekerjaan
                                dengan pola concept dan solution
                                provider.
                            </div>
                        </li>
                        <li class="d-flex">
                            <i class="fas fa-chevron-right"></i>
                            <div class="flex-grow-1">Meningkatkan hubungan yang lebih
                                baik dengan pelanggan dan menjaga
                                kualitas cara kerja dan hasil kerja.</div>
                        </li>

                    </ul>'}}@endif
                    </p>

                    <button type="button" class="btn-outline-reg" data-bs-dismiss="modal">Close</button>
                </div> <!-- end of col -->
            </div> <!-- end of row -->
        </div> <!-- end of modal-content -->
    </div> <!-- end of modal-dialog -->
</div> <!-- end of modal -->
<!-- end of details modal -->


<!-- Details 2 -->
<div class="counter">
    <div class="container">
        <div class="row">
            <div class="col-lg-6 col-xl-5">
                <div class="text-container">
                    <h2><span>Peningkatan kinerja</span><br> yang berkelanjutan</h2>
                    <p>Kami selalu memberikan kepuasan kepada stakholder, dinyatakan dalam kebijakan mutu perusahaan
                        yang terintegrasikan dalam sistem manajemen mutu ISO 9001, sistem manajemen K3/
                        OHSAS 18001 dan sistem manajemen lingkungan ISO 14001 serta pelaksanaan tata
                        kelola perusahaan yang baik secara menyeluruh.</p>

                    <!-- Counter -->
                    <div class="counter-container">
                        <div class="counter-cell">
                            <div data-purecounter-start="0" data-purecounter-end="450" data-purecounter-duration="2" class="purecounter">1</div>
                            <div class="counter-info">Pelanggan Puas</div>
                        </div> <!-- end of counter-cell -->
                        <div class="counter-cell red">
                            <div data-purecounter-start="0" data-purecounter-end="50" data-purecounter-duration="2" class="purecounter">1</div>
                            <div class="counter-info">Proyek terselesaikan</div>
                        </div> <!-- end of counter-cell -->
                    </div> <!-- end of counter-container -->
                    <!-- end of counter -->

                </div> <!-- end of text-container -->
            </div> <!-- end of col -->
            <div class="col-lg-6 col-xl-7">
                <div class="image-container">
                    <img class="img-fluid" src="images/details-2.svg" alt="alternative">
                </div> <!-- end of image-container -->
            </div> <!-- end of col -->
        </div> <!-- end of row -->
    </div> <!-- end of container -->
</div> <!-- end of counter -->
<!-- end of details 2 -->


<!-- Projects -->
<div id="projects" class="filter bg-gray">
    <div class="container">
        <div class="row">
            <div class="col-lg-12">
                <h2 class="h2-heading">Portfolio Kami</h2>
            </div> <!-- end of col -->
        </div> <!-- end of row -->
        <div class="row">
            <div class="col-lg-12">

                <br>

                <div class="grid">
                    @forelse($project as $proj)
                    <div class="element-item">
                        <a href="{{ route('home.article', ['id'=>$proj->id, 'slug'=> $proj->slug]) }}">
                            <img class="img-fluid img-proyek" src="{{asset('images/project/'.$proj->img)}}" alt="{{$proj->judul}}">
                            <p><strong>{{$proj->judul}}</strong> - {{$proj->desSingkat}}</p>
                        </a>
                    </div>
                    @empty
                    Data Belum Tersedia!
                    @endforelse

                </div> <!-- end of grid -->
                <!-- end of filter -->

            </div> <!-- end of col -->
        </div> <!-- end of row -->
        <br>
        <div class="container">
            <div class="row">
                <div class="col-lg-12">
                    <span>
                        @if ($project->hasPages())
                        <nav aria-label="Page navigation example">
                            <ul class="pagination">
                                @if($project->currentPage() != 1 && $project->currentPage() != $project->lastPage())
                                <li class="page-item"><a class="page-link" href="{{ $project->previousPageUrl() }}">Previous</a></li>
                                <li class="page-item"><a class="page-link" href="{{ $project->nextPageUrl() }}">Next</a></li>
                                @elseif($project->currentPage() == 1)
                                <li class="page-item"><a class="page-link" href="{{ $project->nextPageUrl() }}">Next</a></li>
                                @elseif($project->currentPage() == $project->lastPage())
                                <li class="page-item"><a class="page-link" href="{{ $project->previousPageUrl() }}">Previous</a></li>
                                @endif
                            </ul>
                        </nav>
                        @endif

                    </span>
                </div> <!-- end of col -->
            </div> <!-- end of row -->

        </div> <!-- end of container -->
    </div> <!-- end of filter -->

    <!-- end of projects -->



    <!-- Pricing -->
    <div id="pricing" class="cards-2">
        <div class="container">
            <div class="row">
                <div class="col-lg-12">
                    <h2 class="h2-heading">Rencana Kerja K3 Kontruksi</h2>
                </div> <!-- end of col -->
            </div> <!-- end of row -->
            <div class="row">
                <div class="col-lg-12">
                    <!-- Card -->
                    <div class="card">
                        <div class="card-body">
                            <div class="card-title">
                                <span>PERSIAPAN PERALATAN, SARANA
                                    PENUNJANG K3 & ALAT PELINDUNG DIRI</span>
                            </div>
                            <ul class="list-unstyled li-space-lg ">
                                <li>Rambu – rambu K3
                                </li>
                                <li>Instruksi – instruksi keselamatan kerja
                                </li>
                                <li>Helm, safety belt, sepatu kerja, obat - obatan P3K</li>
                                <li>Sarana penunjang
                                </li>

                            </ul>

                        </div>
                    </div>
                    <!-- end of card -->
                    <!-- Card -->
                    <div class="card">
                        <div class="card-body">
                            <div class="card-title">
                                <span>PEMBUATAN SAFETY PLAN</span>
                            </div>
                            <ul class="list-unstyled li-space-lg">
                                <li>Membentuk Organisasi K3 Proyek</li>
                                <li>Membuat rencana kerja K3</li>
                                <li>Menggunakan Matrerial yang memerlukan penanganan khusus
                                </li>
                                <li>Pengoprasian peralatan yang memerlukan penanganan khusus
                                </li>
                                <li>Pengaturan tenaga kerja yang memerlukan keahlian khusus
                                </li>
                                <li>Identifikasi sumber bahaya dan pencegahannya</li>
                                <li>Motto K3 Rapi, Bersih, Sehat</li>
                            </ul>

                        </div>
                    </div>
                    <!-- end of card -->



                    <!-- Card -->
                    <div class="card">
                        <div class="card-body">
                            <div class="card-title">

                                <span>KOORDINASI DENGAN LAYANAN KESEHATAN</span>
                            </div>
                            <ul class="list-unstyled li-space-lg">

                                <li>Membentuk kerjasama dengan rumah sakit dan puskesmas terdekat</li>
                                <li>Mengasuransikan tenaga kerja ke BPJS Ketenagakerjaan</li>
                                <li>Mengantisipasi apabila terjadi
                                    kecelakaan kerja agar segera mendapatkan
                                    pertolongan<br> secara cepat.</li>
                            </ul>

                        </div>
                    </div>
                    <!-- end of card -->

                </div> <!-- end of col -->
            </div> <!-- end of row -->
        </div> <!-- end of container -->
    </div> <!-- end of cards-2 -->
    <!-- end of pricing -->


    <!-- Invitation -->
    <!-- <div class="basic-2">
        <div class="container">
            <div class="row">
                <div class="col-lg-12">
                    <div class="text-container">
                        <h4>In gravida at nunc sodales pretium. Vivamus semper, odio vitae mattis auctor, elit elit
                            semper magna rico</h4>
                        <p class="p-large">Ac tristique velit sapien vitae eros. Praesent ut erat a tellus cursus
                            pharetra finibus posuere nisi. Vivamus feugiat tincidunt sem pre toro</p>
                    </div> 
                </div> 
            </div> 
        </div> 
    </div>  -->
    <!-- end of invitation -->


    <!-- Contact -->
    <div id="contact" class="form-1">
        <div class="container">
            <div class="row">
                <div class="col-lg-12">
                    <h2 class="h2-heading"><span>Isi Formulir Berikut</span><br> untuk pembahasan lebih lanjut
                    </h2>
                    <p class="p-heading">Berikut adalah alamat dan social media kami yang dapat anda hubungi</p>
                    <ul class="list-unstyled li-space-lg">
                        <li><i class="fas fa-map-pin"></i> &nbsp;@if($profile != null){{$profile->alamat}}@else{{"Jl.Raya Rupakicis, Kalimanah, Purbalingga, Jawa Tengah"}}@endif
                        </li>
                        <li><i class="fab fa-whatsapp"></i></i> &nbsp;<a href="@if($profile != null){{$profile->walink}}@else{{'https://wa.me/6281903100766'}}@endif" target="_blank">@if($profile != null){{$profile->wa}}@else{{'+62 8190-3100-766'}}@endif</a>
                        </li>
                        <li><i class=" fab fa-instagram"></i> &nbsp;<a href="@if($profile != null){{$profile->iglink}}@else{{'https://www.instagram.com/'}}@endif">@if($profile != null){{$profile->ig}}@else{{'arsitekrpc'}}@endif</a>
                        </li>
                    </ul>
                </div> <!-- end of col -->
            </div> <!-- end of row -->
            <div class="row">
                <div class="col-lg-6">
                    <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3956.6057998020096!2d109.3378292137652!3d-7.397989594662136!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x2e6559a936f508d9%3A0xe6c04bb54fd647a8!2sSD%20Negeri%202%20Klapasawit!5e0!3m2!1sen!2sid!4v1645280280906!5m2!1sen!2sid" width="100%" height="550" style="border:0;" allowfullscreen="" loading="lazy"></iframe>
                </div>

                <div class="col-lg-6">

                    <!-- Contact Form -->
                    <form action="{{ route('kontakk.post') }}" method="POST" enctype="multipart/form-data">
                        @csrf
                        <div class="form-group">
                            <input type="text" name="name" class="form-control-input @error('name') is-invalid @enderror" placeholder="Name">
                            @error('name')
                            <div class="alert alert-danger mt-2 error invalid-feedback">
                                {{ $message }}
                            </div>
                            @enderror
                        </div>
                        <div class="form-group">
                            <input type="text" name="email" class="form-control-input @error('email') is-invalid @enderror" placeholder="Email">
                            @error('email')
                            <div class="alert alert-danger mt-2 error invalid-feedback">
                                {{ $message }}
                            </div>
                            @enderror
                        </div>
                        <div class="form-group">
                            <input type="text" name="subject" class="form-control-input @error('subject') is-invalid @enderror" placeholder="Subject">
                            @error('subject')
                            <div class="alert alert-danger mt-2 error invalid-feedback">
                                {{ $message }}
                            </div>
                            @enderror
                        </div>

                        <div class="form-group">
                            <textarea name="message" class="form-control-textarea @error('message') is-invalid @enderror" placeholder="Message"></textarea>
                            @error('message')
                            <div class="alert alert-danger mt-2 error invalid-feedback">
                                {{ $message }}
                            </div>
                            @enderror
                        </div>
                        <div class="form-group">
                            <button type="submit" class="form-control-submit-button">Submit</button>
                        </div>
                    </form>
                    <!-- end of contact form -->

                </div> <!-- end of col -->

            </div> <!-- end of row -->
        </div> <!-- end of container -->
    </div> <!-- end of form-1 -->
    <!-- end of contact -->

    @endsection