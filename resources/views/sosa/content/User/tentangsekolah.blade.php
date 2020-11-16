@extends('sosa.masteruser')
@section('title','Tentang Sekolah')

@section('sosa.content.User')
<div class="card bg-dark text-white">
    <img src="{{asset('assets/img/fotosekolah.jpg')}}" class="card-img img-tentangsekolah" alt="fotosekolah">
    <div class="card-img-overlay">
      <h1 class="card-title text-center title-ttgs">Tentang Sekolah</h1>
      <hr id="grs-ttgs">
    </div>
</div>
<div class="container" id="ctn-ttgs1">
    <h5 id="p-ttgs1">Pengenalan SOSA</h5>
    <div class="row" id="row-ttgs1-1">
        <div class="col-lg-3 col-md-3 col-sm-3"></div>
        <div class="col-lg-6 col-md-6 col-sm-6">
            <div id="carouselExampleControls" class="carousel slide crs-ttgs1" data-ride="carousel">
                <div class="carousel-inner">
                  <div class="carousel-item active">
                    <img src="{{asset('assets/img/tentangsekolah1.png')}}" class="d-block w-100" alt="...">
                  </div>
                  <div class="carousel-item">
                    <img src="{{asset('assets/img/tentangsekolah2.png')}}" class="d-block w-100" alt="...">
                  </div>
                  <div class="carousel-item">
                    <img src="{{asset('assets/img/tentangsekolah3.png')}}" class="d-block w-100" alt="...">
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
            <br>
            <p id="p-ttgs2">School Of Science & Arts adalah Sebuah Institusi pendidikan yang menawarkan pendidikan berstandar dunia untuk anak-anak dari usia 3 - 18 tahun.<br>
                <br>
                Kami percaya dalam membawa siswa kami ke potensi penuh mereka dan dengan mempersiapkan mereka untuk tahap selanjutnya dalam pendidikan dengan menawarkan kurikulum yang lengkap dan menantang. Anak-anak kita juga belajar pentingnya memiliki karakter dan nilai-nilai yang baik melalui pengabdian kita dan pengembangan murid dan pelajaran agama kita.<br>
                <br>
                Siswa Menengah kami mulai sebagai generalis, mendapatkan landasan yang baik dalam berbagai mata pelajaran sebelum sedikit berspesialisasi ketika mereka memulai program Sertifikat Pendidikan Menengah (IGCSE) Internasional Cambridge di Kelas 9 dan 10. Siswa memilih mata pelajaran berdasarkan minat mereka , bakat dan saran dari guru mereka.<br>
                <br>
                Puncak tahun mereka di sini adalah di Kelas 11 dan 12 ketika siswa kami mempersiapkan diri untuk masuk universitas dengan mengikuti Program Diploma Baccalaureate Internasional. Siswa lebih lanjut mengkhususkan diri di sini dan juga dibimbing karena mereka memperoleh tidak hanya konten tetapi juga keterampilan yang sangat penting untuk pendidikan universitas.<br>
                <br>
                Siswa di seluruh tingkat kelas dapat mengambil bagian dalam Kegiatan Ko-Kurikuler setelah sekolah. Ini, bersama dengan , ​​kunjungan, kegiatan olahraga dan budaya yang diselenggarakan sekolah, akan memberi siswa kami pendidikan abad ke-21 yang tidak terbatas pada batas-batas kelas.
            </p>
        </div>
        <div class="col-lg-3 col-md-3 col-sm-3"></div>
    </div>
</div>
@endsection