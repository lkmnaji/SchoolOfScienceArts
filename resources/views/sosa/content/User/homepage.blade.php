@extends('sosa.masteruser')
@section('title','School Of Science & Arts')

@section('sosa.content.User')
    <!-- Carosel -->
    <div id="carouselExampleCaptions" class="carousel slide" data-ride="carousel">
        <div class="carousel-inner">
            @foreach ($carousel as $item)
            <div class="carousel-item active">
                <img src="{{ Storage::url('public/img/') . $item->img_carousel }}" class="d-block w-100" alt="..." id="img-crs1">
            </div>
            @endforeach
            @foreach ($carousel2 as $item2)
            <div class="carousel-item">
                <img src="{{ Storage::url('public/img/') . $item2->img_carousel }}" class="d-block w-100" alt="..." id="img-crs2">
            </div>
            @endforeach
            
        </div>
        <a class="carousel-control-prev" href="#carouselExampleCaptions" role="button" data-slide="prev">
            <span class="carousel-control-prev-icon" aria-hidden="true"></span>
            <span class="sr-only">Previous</span>
        </a>
        <a class="carousel-control-next" href="#carouselExampleCaptions" role="button" data-slide="next">
            <span class="carousel-control-next-icon" aria-hidden="true"></span>
            <span class="sr-only">Next</span>
        </a>
    </div>
    <!-- tutup carosel -->

    {{-- content --}}
    <div class="container" id="ctn-home1">
        <div class="row-align-items" id="row-home1-1">
            <h1 id="p-home1">SELAMAT DATANG DI <br> SCHOOL OF SCIENCE & ARTS</h1>
            <p class="text-center" id="p-home2">School Of Science & Arts adalah Sekolah yang menawarkan pendidikan <br> standar dunia untuk anak-anak dari usia 12-18 tahun</p>
            <hr id="garis-home">
        </div>
        <div class="row" id="row-home1-2">
            <div class="col-lg-6 col-md-6 col-sm-6">
                    <h1 id="p-home3">VISI</h1>
                    <hr id="garis-home1">
                    <p id="p-home4">TERWUJUDNYA PESERTA DIDIK YANG BERIMAN, CERDAS, TERAMPIL, MANDIRI DAN BERWAWASAN GLOBAL</p>
                    <h1 id="p-home5">MISI</h1>
                    <hr id="garis-home1">
                    <p id="p-home6">
                        Kami bertujuan untuk memberikan pendidikan holistik dalam lingkungan yang berupaya untuk mengeluarkan potensi setiap siswa secara maksimal; 
                        berkembang di setiap karakter moral yang kuat, dijiwai dengan nilai-nilai & prinsip-prinsip Ilahi dan untuk membimbing dan mempersiapkan 
                        siswa untuk menjadi pemimpin untuk kebaikan yang lebih besar dan pelayanan kepada orang lain.</p>
                    <a href="{{route('visimisi.sekolah')}}" id="p-home7"><button class="btn btn-primary" id="btn-home1">Lihat lebih lengkap &nbsp;<span><i class='fas fa-arrow-right'></i></span></button></a>
            </div>
            <div class="col-lg-6 col-md-6 col-sm-6">
                <img src="{{asset('assets/img/anaksekolah1.jpg')}}" alt="" id="img-home1">
            </div>
        </div>
        <div class="row" id="row-home1-3">
            <div class="col-lg-6 col-md-6 col-sm-6">
                <img src="{{asset('assets/img/kepalasekolah.jpg')}}" alt="" id="img-home2">
            </div>
            <div class="col-lg-6 col-md-6 col-sm-6">
                    <h1 id="p-home8">SAMBUTAN KEPALA SEKOLAH</h1>
                    <p id="p-home9">
                        Kami mengucapkan selamat datang di Website kami School Of Science & Arts yang saya 
                        tujukan untuk seluruh unsur pimpinan, guru, karyawan dan siswa masyarakat guna dapat mengakses seluruh informasi 
                        tentang segala profil, aktifitas/kegiatan serta fasilitas sekolah kami. Kami selaku pimpinan sekolah mengucapkan 
                        terima kasih kepada tim pembuat Website ini yang telah berusaha untuk dapat lebih memperkenalkan segala perihal 
                        yang dimiliki oleh sekolah.
                    </p>
                    <p id="p-home10">Hormat Kami,<br>
                        Dian Sastro
                    </p>
            </div>
        </div>
    </div>

    <div class="card card-ctnhome2">
        <img src="{{asset('assets/img/library.jpg')}}" class="card-img img-ctn2" alt="...">
        <div class="card-img-overlay">
            <div class="row">
                <div class="col-lg-2 col-md-2 col-sm-2"></div>
                <div class="col-lg-8 col-md-8 col-sm-8">
                    <div class="row" id="rowhome2-1">
                        <div class="col-lg-4 col-md-4 col-sm-4">
                            <div class="card ch2-1">
                                <div class="card-body">
                                    <h3 class="card-title" id="p-home11">2020</h3>
                                    <p class="card-text" id="p-home12">TAHUN BERDIRI</p>
                                </div>
                            </div>
                        </div>
                        <div class="col-lg-4 col-md-4 col-sm-4">
                            <div class="card ch2-2">
                                <div class="card-body">
                                    <h3 class="card-title" id="p-home11">30</h3>
                                    <p class="card-text" id="p-home12">TENAGA PENDIDIK</p>
                                </div>
                            </div>
                        </div>
                        <div class="col-lg-4 col-md-4 col-sm-4">
                                <div class="card ch2-3">
                                    <div class="card-body">
                                        <h3 class="card-title" id="p-home11">150</h3>
                                        <p class="card-text" id="p-home12">PESERTA DIDIK</p>
                                    </div>
                                </div>
                        </div>
                    </div>
                </div>
                <div class="col-lg-2 col-md-2 col-sm-2"></div>
            </div>
        </div>
    </div>

    <div class="container-fluid" id="ctn-home3">
        <h1 id="p-home13" class="text-center">Sekolah Yang Tersedia</h1>
        <p class="text-center" id="p-home14">Inilah Sekolah yang tersedia di School Of Science & Arts</p>
        
        <div class="row" id="row-home3-2">
            <div class="col-lg-3 col-md-3 col-sm-3"></div>
            <div class="col-lg-6 col-md-6 col-sm-6">
                <div class="row">
                    <div class="col-lg-6 col-md-6 col-sm-6">
                        <div class="card">
                          <img src="{{asset('assets/img/smpscience.png')}}" class="card-img-top" alt="...">
                          <div class="card-body">
                            <h5 class="card-title" id="p-home14">SMP SCIENCE <br> Thomas Alva Edison</h5>
                          </div>
                        </div>
                    </div>
                    <div class="col-lg-6 col-md-6 col-sm-6">
                        <div class="card">
                          <img src="{{asset('assets/img/smascience.png')}}" class="card-img-top img-sekolah" alt="...">
                          <div class="card-body">
                            <h5 class="card-title" id="p-home14">SMA SCIENCE <br> Albert Einstein</h5>
                          </div>
                        </div>
                    </div>
                </div>
                <br>
                <div class="row">
                    <div class="col-lg-6 col-md-6 col-sm-6">
                        <div class="card">
                          <img src="{{asset('assets/img/smpart.jpg')}}" class="card-img-top img-sekolah" alt="...">
                          <div class="card-body">
                            <h5 class="card-title" id="p-home14">SMP ART <br> Leonardo Da Vinci</h5>
                          </div>
                        </div>
                    </div>
                    <div class="col-lg-6 col-md-6 col-sm-6">
                        <div class="card">
                          <img src="{{asset('assets/img/smaart.jpg')}}" class="card-img-top img-sekolah" alt="...">
                          <div class="card-body">
                            <h5 class="card-title" id="p-home14">SMA ART <br> Wolfgangus Theophilus Mozart</h5>
                          </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-lg-3 col-md-3 col-sm-3"></div>
        </div>
    </div>

    <div class="card" id="ctn-home4">
        <img src="{{asset('assets/img/perpustakaan1.jpg')}}" class="card-img img-ctnhome4" alt="perpustakaan">
        <div class="card-img-overlay">
          <h3 id="p-home15">Kisah Menarik Siswa</h3>
          <p id="p-home16">Temukan berbagai cerita menarik dari para siswa School Of Science & Arts</p>
          <div class="row">
            <div class="col-lg-3 col-md-3 col-sm-3"></div>
            <div class="col-lg-5 col-md-5 col-sm-5">
                <div id="carouselExampleControls" class="carousel slide sd1" data-ride="carousel">
                    <div class="carousel-inner">
                        <div class="carousel-item active">
                            <img src="{{asset('assets/img/siswa1.jpg')}}" id="cs1" class="rounded-circle" alt="...">
                                <p id="p-home17">Menjadi siswa di SMP Science Thomas Alva Edison<br>
                                    Membuat saya tertarik kepada ilmu pengetahuan dan saya ingin mengeksplor lebih</p>
                                <h5 id="p-home18">Xabiru Pangabean</h5>
                        </div>
                        <div class="carousel-item">
                            <img src="{{asset('assets/img/siswa2.jpg')}}" id="cs1" class="rounded-circle" alt="...">
                            <p id="p-home17">Menjadi siswa di SMA Art Wolfgangus Theophilus Mozart<br>
                                Membuat saya dapat mengeksplor pengalaman lebih mendalam tentang musik</p>
                            <h5 id="p-home18">Saputra Aji</h5>
                        </div>
                        <div class="carousel-item">
                            <img src="{{asset('assets/img/siswa3.jpg')}}" id="cs1" class="rounded-circle" alt="...">
                            <p id="p-home17">Menjadi siswa di SMP Art Leonardo Da Vinci<br>
                                Membuat saya dapat mengeksplor pengalaman lebih mendalam tentang seni lukis</p>
                            <h5 id="p-home18">Gisel Setiawati</h5>
                        </div>
                    </div>
                    <a class="carousel-control-prev" href="#carouselExampleControls" role="button" data-slide="prev">
                    <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                    <span class="sr-only">Previous</span>
                    </a>
                    <a class="carousel-control-next" href="#carouselExampleControls" role="button" data-slide="next">
                    <span class="carousel-control-next-icon" aria-hidden="true"></span>
                    <span class="sr-only">Next</span>
                    </a>
                </div>
            </div>
            <div class="col-lg-4 col-md-4 col-sm-4"></div>
        </div>
        </div>
      </div>


    <div class="container" id="ctn-home5">
        <div class="row" id="row-home5-1">
            <div class="card-deck">
                <div class="card">
                  <img src="{{asset('assets/img/homeakhir1.jpg')}}" class="card-img-top" id="fotoakhir1" alt="fotoakhir">
                </div>
                <div class="card">
                  <img src="{{asset('assets/img/homeakhir2.jpg')}}" class="card-img-top" alt="fotoakhir">
                </div>
                <div class="card">
                  <img src="{{asset('assets/img/homeakhir3.jpg')}}" class="card-img-top" id="fotoakhir1" alt="fotoakhir">
                </div>
              </div>
        </div>
        <div class="row" id="row-home5-2">
            <div class="card-deck">
                <div class="card">
                  <img src="{{asset('assets/img/homeakhir5.png')}}" class="card-img-top" alt="fotoakhir">
                </div>
                <div class="card">
                  <img src="{{asset('assets/img/homeakhir6.png')}}" class="card-img-top" alt="fotoakhir">
                </div>
                <div class="card">
                  <img src="{{asset('assets/img/homeakhir7.png')}}" class="card-img-top" alt="fotoakhir">
                </div>
              </div>
        </div>
    </div>

    <script>
        document.getElementById("btn-home1").addEventListener("mouseover", mouseOver);
        document.getElementById("btn-home1").addEventListener("mouseout", mouseOut);
        
        function mouseOver() {
          document.getElementById("btn-home1").style.backgroundColor = "white";
          document.getElementById("btn-home1").style.color = "#2A4365";
        }
        
        function mouseOut() {
          document.getElementById("btn-home1").style.backgroundColor = "#2A4365";
          document.getElementById("btn-home1").style.color = "white";
        }
    </script>

@endsection