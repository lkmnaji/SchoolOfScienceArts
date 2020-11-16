<nav class="navbar navbar-expand-lg navbar-light">
    <a class="navbar-brand" href="{{route('home.user')}}">
      <img src="{{asset('assets/img/logonavbar.png')}}" alt="logonavbar" id="logonavbar">
    </a>
    <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
      <span class="navbar-toggler-icon"></span>
    </button>
  
    <div class="collapse navbar-collapse menu" id="navbarSupportedContent">
      <ul class="navbar-nav md-auto">
        <li class="nav-item active">
          <a class="nav-link" href="{{route('home.user')}}" id="a-navbar">Home</a>
        </li>
        <li class="nav-item dropdown">
          <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
            Profile Sekolah
          </a>
          <div class="dropdown-menu" aria-labelledby="navbarDropdown">
            <a class="dropdown-item" href="{{route('tentang.sekolah')}}">Tentang Sekolah</a>
            <a class="dropdown-item" href="{{route('visimisi.sekolah')}}">Visi dan Misi</a>
          </div>
        </li>
        <li class="nav-item dropdown">
          <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
            Pendaftaran
          </a>
          <div class="dropdown-menu" aria-labelledby="navbarDropdown">
            <a class="dropdown-item" href="{{route('index.pendaftaransiswa')}}">Pendaftaran Siswa</a>
            <a class="dropdown-item" href="{{route('index.pendaftaranpegawai')}}">Pendaftaran Pegawai</a>
          </div>
        </li>
        <li class="nav-item dropdown">
          <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
            Program Pendidikan
          </a>
          <div class="dropdown-menu" aria-labelledby="navbarDropdown">
            <a class="dropdown-item" href="{{route('index.smpscience')}}">SMP Science Thomas Alva Edison</a>
            <a class="dropdown-item" href="{{route('index.smascience')}}">SMA Science Einstein</a>
            <a class="dropdown-item" href="{{route('index.smpart')}}">SMP Art Leonardo Da Vinci</a>
            <a class="dropdown-item" href="{{route('index.smaart')}}">SMA Art Wolfgangus Theophilus Mozart</a>
          </div>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="#ft" id="a-navbar" id="contact_us">Contact Us</a>
        </li>
      </ul>
    </div>
  </nav>