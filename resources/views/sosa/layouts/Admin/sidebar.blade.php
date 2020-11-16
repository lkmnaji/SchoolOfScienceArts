<div class="col-md-3 left_col">
    <div class="left_col scroll-view">
      <div class="navbar nav_title" style="border: 0;">
        <a href="#" class="site_title"><i class='fas fa-user-tie'></i>&nbsp;<span>Admin SOSA</span></a>
      </div>

      <div class="clearfix"></div>

      <!-- menu profile quick info -->
      <div class="profile clearfix">
        <div class="profile_pic">
          <img src="{{asset('/assets/img/logoadmin.png')}}" alt="..." class="img-circle profile_img">
        </div>
        <div class="profile_info">
          <span>Welcome,</span>
          <h2>{{ Auth::user()->name }}</h2>
        </div>
      </div>
      <!-- /menu profile quick info -->

      <br />

      <!-- sidebar menu -->
      <div id="sidebar-menu" class="main_menu_side hidden-print main_menu">
        <div class="menu_section">
          <h3>General</h3>
          <ul class="nav side-menu">
            <li><a href="{{route('admin.index')}}"><i class="fa fa-home"></i>Home</a></li>
            <li><a><i class="fa fa-edit"></i> Forms <span class="fa fa-chevron-down"></span></a>
              <ul class="nav child_menu">
                <li><a href="{{route('form.pendaftaransiswa')}}">Form Pendaftaran Siswa</a></li>
                <li><a href="{{route('form.pendaftaranpegawai')}}">Form Pendaftaran Guru</a></li>
              </ul>
            </li>
            <li><a><i class="fa fa-table"></i> Tables <span class="fa fa-chevron-down"></span></a>
              <ul class="nav child_menu">
                <li><a href="{{route('tingkatpendidikan.index')}}">Tingkat Pendidikan</a></li>
                <li><a href="{{route('namasekolah.index')}}">Nama Sekolah</a></li>
                <li><a href="{{route('posisi.index')}}">Posisi Lamaran</a></li>
                <li><a href="{{route('sumberinformasi.index')}}">Sumber Informasi</a></li>
                <li><a href="{{route('jeniskelamin.index')}}">Jenis Kelamin</a></li>
                <li><a href="{{route('tahunajaran.index')}}">Tahun Ajaran</a></li>
                <li><a href="{{route('footer.index')}}">Footer User</a></li>
                <li><a href="{{route('carousel.index')}}">Carousel User</a></li>
                <li><a href="{{route('profilesekolah.index')}}">Profile Sekolah</a></li>
                <li><a href="{{route('index.formsiswa')}}">Form Pendaftaran Siswa</a></li>
                <li><a href="{{route('index.formpegawai')}}">Form Pendaftaran Pegawai</a></li>
              </ul>
            </li>
            <li><a><i class="fa fa-clone"></i>Layouts <span class="fa fa-chevron-down"></span></a>
              <ul class="nav child_menu">
                <li><a href="{{route('home.user')}}">HomePageUser</a></li>
                <li><a href="{{route('tentang.sekolah')}}">Tentang Kami</a></li>
                <li><a href="{{route('index.smascience')}}">Layanan Kami</a></li>
              </ul>
            </li>
          </ul>
        </div>
      </div>
      <!-- /sidebar menu -->

      <!-- /menu footer buttons -->
      <div class="sidebar-footer hidden-small">
        <a data-toggle="tooltip" data-placement="top" title="Logout" href="{{ route('logout') }}"
           onclick="event.preventDefault(); document.getElementById('logout-form').submit();" 
           class="glyphicon glyphicon-off btn btn-block" aria-hidden="true" style="color: white">
        </a>

        <form id="logout-form" action="{{ route('logout') }}" method="POST" class="d-none">
            @csrf
        </form>
      </div>
      <!-- /menu footer buttons -->
    </div>
</div>
