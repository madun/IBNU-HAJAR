<div class="col-md-3 left_col menu_fixed">
  <div class="left_col scroll-view">
    <div class="navbar nav_title" style="border: 0;">
      <a href="{{ route('admin.dashboard') }}" class="site_title">
        <center>
          {{-- <i class="fa fa-fire"></i> --}}
          <span>
            {{-- <img style="width:20%" src="{{ asset('images/LOGO UMART.png') }}" alt=""/> --}}
            IBNU HAJAR
          </span>
        </center>
      </a>
    </div>

    <div class="clearfix"></div>

    <!-- menu profile quick info -->
    <div class="profile clearfix">
      <div class="profile_pic">
        <img src="{{ asset('admin/images/img.jpg') }}" alt="..." class="img-circle profile_img">
      </div>
      <div class="profile_info">
        <span>Welcome,</span>
        <h2>{{ isset(Auth::user()->name) ? Auth::user()->name : Auth::user()->email }}</h2>
      </div>
    </div>
    <!-- /menu profile quick info -->

    <br />

    <!-- sidebar menu -->
    <div id="sidebar-menu" class="main_menu_side hidden-print main_menu">
      <div class="menu_section">
        <span class="text-center"><h3>Data Master</h3></span>
        <ul class="nav side-menu">
          <li class="{{ $name === 'dashboard' ? $curpage : '' }}"><a href="{{ route('admin.dashboard') }}"><i class="fa fa-home"></i> Dashboard </a></li>
          <li class="{{ $submenu == 'y' && $subname == 'data_master' ? $active : '' }}"><a><i class="fa fa-edit"></i> Master Data <span class="fa fa-chevron-down"></span></a>
            <ul class="nav child_menu" style="{{ $submenu == 'y' && $subname == 'data_master' ? $style : '' }}">
              <li class="{{ $name === 'santri' ? $curpage : '' }}"><a href="{{ route('santri.index') }}">Data Kesantrian </a></li>
              <li class="{{ $name === 'data_kurikulum' ? $curpage : '' }}"><a href="{{ route('kurikulum.index') }}">Data Kurikulum </a></li>
              <li class="{{ $name == 'data_pemasok' ? $curpage : '' }}"><a href="{{ route('data_pemasok.index') }}">Data Asatidz</a></li>
              <li class="{{ $name == 'data_pelanggan' ? $curpage : '' }}"><a href="{{ route('data_pelanggan.index') }}">Data Pelanggan</a></li>
              <li class="{{ $name == 'data_barang' ? $curpage : '' }}"><a href="{{ route('data_barang.index') }}">Data Barang</a></li>
              {{-- <li class="{{ $name == 'data_pegawai' ? $curpage : '' }}"><a href="form_wizards.html">Data Pegawai</a></li> --}}
              {{-- <li class="{{ $name == 'data_user' ? $curpage : '' }}"><a href="form_upload.html">Data User</a></li> --}}
              <li class="{{ $name == 'data_kategori' ? $curpage : '' }}"><a href="{{ route('data_kategori.index') }}">Data Kategori</a></li>
              <li class="{{ $name == 'data_subkategori' ? $curpage : '' }}"><a href="{{ route('data_subkategori.index') }}">Data Sub Kategori</a></li>
              <li class="{{ $name == 'data_itemkategori' ? $curpage : '' }}"><a href="{{ route('data_itemkategori.index') }}">Data Item Kategori</a></li>
              <li class="{{ $name == 'data_member' ? $curpage : '' }}"><a href="{{ route('data_member.index') }}">Data Jenis Member</a></li>
            </ul>
          </li>
          <li class="{{ $name === 'presence' ? $curpage : '' }}"><a href="{{ route('presence.index') }}"><i class="fa fa-table"></i> Presence </a></li>
          <li class="{{ $submenu == 'y' && $subname == 'transaksi' ? $active : '' }}"><a><i class="fa fa-table"></i> Transaksi <span class="fa fa-chevron-down"></span></a>
            <ul class="nav child_menu" style="{{ $submenu == 'y' && $subname == 'transaksi' ? $style : '' }}">
              <li class="{{ $name == 'penjualan' ? $curpage : '' }}"><a href="{{ route('transaksi_penjualan.index') }}">Penjualan</a></li>
              <li class="{{ $name == 'pembelian' ? $curpage : '' }}"><a href="tables_dynamic.html">Pembelian</a></li>
            </ul>
          </li>
          <li><a><i class="fa fa-bar-chart-o"></i> Laporan <span class="fa fa-chevron-down"></span></a>
            <ul class="nav child_menu">
              <li><a href="chartjs.html">Margin Barang</a></li>
              <li><a href="chartjs2.html">Margin Uang</a></li>
              <li><a href="morisjs.html">Barang</a></li>
              <li><a href="echarts.html">Pemasok</a></li>
              <li><a href="other_charts.html">Pelanggan</a></li>
              <li><a href="other_charts.html">Pembelian</a></li>
              <li><a href="other_charts.html">Penjualan</a></li>
              <li><a href="other_charts.html">Pegawai</a></li>
            </ul>
          </li>
        </ul>
        <span class="text-center"><h3>WEBSITE UMART</h3></span>
        <ul class="nav side-menu">
          <li><a href="#"><i class="fa fa-home"></i> Home </a></li>
          <li class="{{ $submenu == 'y' && $subname == 'promo_program' ? $active : '' }}"><a><i class="fa fa-dollar"></i> Promo & Program <span class="fa fa-chevron-down"></span></a>
            <ul class="nav child_menu" style="{{ $submenu == 'y' && $subname == 'promo_program' ? $style : '' }}">
              <li class="{{ $name == 'promo' ? $curpage : '' }}"><a href="#">Promo</a></li>
              <li class="{{ $name == 'program' ? $curpage : '' }}"><a href="#">Program</a></li>
              <li class="{{ $name == 'kontes' ? $curpage : '' }}"><a href="#">Kontes</a></li>
            </ul>
          </li>
          <li class="{{ $submenu == 'y' && $subname == 'keanggotaan' ? $active : '' }}"><a><i class="fa fa-puzzle-piece"></i> Keanggotaan <span class="fa fa-chevron-down"></span></a>
            <ul class="nav child_menu" style="{{ $submenu == 'y' && $subname == 'keanggotaan' ? $style : '' }}">
              <li class="{{ $name == 'tentang_anggota' ? $curpage : '' }}"><a href="#">Tentang Anggota</a></li>
              <li class="{{ $name == 'penawaran_spesial' ? $curpage : '' }}"><a href="#">Penawaran Spesial</a></li>
              <li class="{{ $name == 'keuntungan_anggota' ? $curpage : '' }}"><a href="#">Keuntungan Anggota</a></li>
              <li class="{{ $name == 'tips_anggota' ? $curpage : '' }}"><a href="#">Tips Anggota</a></li>
            </ul>
          </li>
          <li class="{{ $submenu == 'y' && $subname == 'layanan' ? $active : '' }}"><a><i class="fa fa-paper-plane-o"></i> Layanan <span class="fa fa-chevron-down"></span></a>
            <ul class="nav child_menu" style="{{ $submenu == 'y' && $subname == 'layanan' ? $style : '' }}">
              <li class="{{ $name == 'pembelian_umart' ? $curpage : '' }}"><a href="#">Pembelian</a></li>
              <li class="{{ $name == 'pembayaran_umart' ? $curpage : '' }}"><a href="#">Pembayaran</a></li>
              <li class="{{ $name == 'isi_saldo' ? $curpage : '' }}"><a href="#">Isi Saldo</a></li>
              <li class="{{ $name == 'ambil_uang' ? $curpage : '' }}"><a href="#">Ambil Uang</a></li>
              <li class="{{ $name == 'tiket' ? $curpage : '' }}"><a href="#">Tiket</a></li>
              <li class="{{ $name == 'jasa_kurir' ? $curpage : '' }}"><a href="#">Jasa Kurir</a></li>
              <li class="{{ $name == 'pemesanan_umart' ? $curpage : '' }}"><a href="#">Pemesanan</a></li>
            </ul>
          </li>
          <li class="{{ $name === 'waralaba' ? $curpage : '' }}"><a href="#"><i class="fa fa-money"></i> Waralaba </a></li>
          <li class="{{ $submenu == 'y' && $subname == 'berita' ? $active : '' }}"><a><i class="fa fa-newspaper-o"></i> Berita <span class="fa fa-chevron-down"></span></a>
            <ul class="nav child_menu" style="{{ $submenu == 'y' && $subname == 'berita' ? $style : '' }}">
              <li class="{{ $name == 'perusahaan' ? $curpage : '' }}"><a href="{{ route('berita-perusahaan.index') }}">Perusahaan</a></li>
              <li class="{{ $name == 'komunitas_acara' ? $curpage : '' }}"><a href="#">Komunitas & Acara</a></li>
            </ul>
          </li>
          <li class="{{ $submenu == 'y' && $subname == 'produk_kami' ? $active : '' }}"><a><i class="fa fa-tasks"></i> Produk Kami <span class="fa fa-chevron-down"></span></a>
            <ul class="nav child_menu" style="{{ $submenu == 'y' && $subname == 'produk_kami' ? $style : '' }}">
              <li class="{{ $name == 'tentang_produk_kami' ? $curpage : '' }}"><a href="#">Tentang Produk Kami</a></li>
              <li class="{{ $name == 'kelebihan_produk_kami' ? $curpage : '' }}"><a href="#">Kelebihan Produk Kami</a></li>
              <li class="{{ $name == 'daftar_produk_kami' ? $curpage : '' }}"><a href="#">Daftar Produk Kami</a></li>
              <li class="{{ $name == 'promo_produk_kami' ? $curpage : '' }}"><a href="#">Promo Produk Kami</a></li>
            </ul>
          </li>
          <li class="{{ $submenu == 'y' && $subname == 'tentang_kami' ? $active : '' }}"><a><i class="fa fa-user"></i> Tentang Kami <span class="fa fa-chevron-down"></span></a>
            <ul class="nav child_menu" style="{{ $submenu == 'y' && $subname == 'tentang_kami' ? $style : '' }}">
              <li class="{{ $name == 'corporate' ? $curpage : '' }}"><a href="#">Corporate</a></li>
              <li class="{{ $name == 'penghargaan_prestasi' ? $curpage : '' }}"><a href="#">Penghargaan & Prestasi</a></li>
              <li class="{{ $name == 'lokasi_kantor' ? $curpage : '' }}"><a href="#">Lokasi Kantor</a></li>
              <li class="{{ $name == 'komunitas' ? $curpage : '' }}"><a href="#">Komunitas Kami</a></li>
              <li class="{{ $name == 'hubungi_kami' ? $curpage : '' }}"><a href="#">Hubungi Kami</a></li>
            </ul>
          </li>
          <li class="{{ $name === 'karir' ? $curpage : '' }}"><a href="#"><i class="fa fa-android"></i> Karir </a></li>
          <li class="{{ $name === 'umart_mind' ? $curpage : '' }}"><a href="#"><i class="fa fa-apple"></i> Umart Mind </a></li>
        </ul>
      </div>

    </div>
    <!-- /sidebar menu -->

    <!-- /menu footer buttons -->
    <div class="sidebar-footer hidden-small">
      <a data-toggle="tooltip" data-placement="top" title="Settings">
        <span class="glyphicon glyphicon-cog" aria-hidden="true"></span>
      </a>
      <a data-toggle="tooltip" data-placement="top" title="FullScreen">
        <span class="glyphicon glyphicon-fullscreen" aria-hidden="true"></span>
      </a>
      <a data-toggle="tooltip" data-placement="top" title="Lock">
        <span class="glyphicon glyphicon-eye-close" aria-hidden="true"></span>
      </a>
      <a data-toggle="tooltip" data-placement="top" title="Logout" href="{{ route('admin.logout') }}" onclick="event.preventDefault(); document.getElementById('logout-admin').submit();">
        <form id="logout-admin" action="{{ route('admin.logout') }}" method="POST" style="display: none;">
            {{ csrf_field() }}
        </form>
        <span class="glyphicon glyphicon-off" aria-hidden="true"></span>
      </a>
    </div>
    <!-- /menu footer buttons -->
  </div>
</div>
