<!-- Navigation panel -->
<nav class="main-nav orange stick-fixed mobile-on">
    <div class="full-wrapper relative clearfix">
        <!-- Logo ( * your text or image into link tag *) -->
        <div class="nav-logo-wrap local-scroll">
            <a href="{{ route('umart') }}" class="logo">
                <!-- <img src="images/logo-white.png" alt="" /> -->
                U MART
            </a>
        </div>
        <div class="mobile-nav">
            <i class="fa fa-bars" style="color:white !important;"></i>
        </div>

        <!-- Main Menu -->
        <div class="inner-nav desktop-nav">
            <ul class="clearlist">

                <!-- Item With Sub -->
                <li>
                    <a href="{{ route('umart') }}" class="mn-has-sub active">Home</a>
                </li>
                <li>
                    <a href="#" class="mn-has-sub active">Promo & program <i class="fa fa-angle-down white"></i></a>

                    <!-- Sub Multilevel -->
                    <ul class="mn-sub mn-has-multi">

                        <!-- Sub Column -->
                        <li class="mn-sub-multi">
                            <!-- <a class="mn-group-title">Multi Page</a> -->

                            <ul>
                                <li>
                                    <a href="{{ route('promo') }}">Promo</a>
                                </li>
                                <li>
                                    <a href="{{ route('program') }}">Program</a>
                                </li>
                                <li>
                                    <a href="{{ route('kontes') }}">Kontes</a>
                                </li>
                            </ul>

                        </li>

                    </ul>
                    <!-- End Sub Multilevel -->

                </li>
                <!-- End Item With Sub -->

                <!-- Item With Sub -->
                <li>
                    <a href="#" class="mn-has-sub active">Keanggotaan <i class="fa fa-angle-down white"></i></a>

                    <!-- Sub Multilevel -->
                    <ul class="mn-sub mn-has-multi">

                        <li class="mn-sub-multi">
                            <!-- <a class="mn-group-title">Group 1</a> -->

                            <ul>
                                <li>
                                    <a href="{{ route('tentang.anggota') }}">Tentang Anggota</a>
                                </li>
                                <li>
                                    <a href="{{ route('penawaran.spesial') }}">Penawaran Spesial</a>
                                </li>
                                <li>
                                    <a href="{{ route('keuntungan.anggota') }}">Keuntungan Anggota</a>
                                </li>
                                <li>
                                    <a href="{{ route('tips') }}">Tips</a>
                                </li>
                            </ul>

                        </li>

                    </ul>
                    <!-- End Sub Multilevel -->

                </li>
                <!-- End Item With Sub -->

                <!-- Item With Sub -->
                <li>
                    <a href="#" class="mn-has-sub active">Layanan <i class="fa fa-angle-down white"></i></a>

                    <!-- Sub Multilevel -->
                    <ul class="mn-sub mn-has-multi">

                        <li class="mn-sub-multi">

                            <ul>
                                <li>
                                    <a href="{{ route('pembelian') }}"> Pembelian</a>
                                </li>
                                <li>
                                    <a href="{{ route('pembayaran') }}">Pembayaran</a>
                                </li>
                                <li>
                                    <a href="{{ route('isi.saldo') }}">Isi Saldo</a>
                                </li>
                                <li>
                                    <a href="{{ route('ambil.uang') }}">Ambil Uang</a>
                                </li>
                                <li>
                                    <a href="{{ route('tiket') }}">Tiket</a>
                                </li>
                                <li>
                                    <a href="{{ route('jasa.kurir') }}">Jasa Kurir</a>
                                </li>
                                <li>
                                    <a href="{{ route('pemesanan') }}">Pemesanan</a>
                                </li>
                            </ul>
                        </li>

                    </ul>
                    <!-- End Sub Multilevel -->

                </li>
                <!-- End Item With Sub -->

                <!-- Item With Sub -->
                <li>
                    <a href="{{ route('waralaba') }}" class="mn-has-sub active">Waralaba</a>
                </li>
                <!-- End Item With Sub -->

                <!-- Item With Sub -->
                <li>
                    <a href="#" class="mn-has-sub active">Berita <i class="fa fa-angle-down white"></i></a>

                    <!-- Sub Multilevel -->
                    <ul class="mn-sub mn-has-multi">

                        <li class="mn-sub-multi">

                            <ul>
                                <li>
                                    <a href="{{ route('perusahaan') }}">Perusahaan</a>
                                </li>
                                <li>
                                    <a href="{{ route('komunitas.dan.acara') }}">Komunitas & Acara</a>
                                </li>
                            </ul>
                        </li>

                    </ul>
                    <!-- End Sub Multilevel -->

                </li>
                <!-- End Item With Sub -->

                <!-- Item With Sub -->
                <li>
                    <a href="#" class="mn-has-sub active">Produk Kami <i class="fa fa-angle-down white"></i></a>

                    <!-- Sub -->
                    <ul class="mn-sub to-right">

                        <li>
                            <a href="{{ route('tentang.produk') }}">Tentang produk kami</a>
                        </li>
                        <li>
                            <a href="{{ route('kelebihan.produk') }}">Kelebihan produk kami</a>
                        </li>
                        <li>
                            <a href="{{ route('daftar.produk') }}">Daftar produk kami</a>
                        </li>
                        <li>
                            <a href="{{ route('promo.produk') }}">Promo produk kami</a>
                        </li>

                    </ul>
                    <!-- End Sub -->

                </li>
                <!-- End Item With Sub -->

                <!-- tentang kami -->
                <li>
                    <a href="#" class="mn-has-sub active">Tentang Kami <i class="fa fa-angle-down white"></i></a>

                    <!-- Sub -->
                    <ul class="mn-sub to-left">

                        <li>
                            <a href="{{ route('corporate') }}">Corporate</a>
                        </li>
                        <li>
                            <a href="{{ route('penghargaan.dan.prestasi') }}">Penghargaan & Prestasi</a>
                        </li>
                        <li>
                            <a href="{{ route('lokasi.kantor') }}">Lokasi Kantor</a>
                        </li>
                        <li>
                            <a href="{{ route('komunitas.kami') }}">Komunitas Kami</a>
                        </li>
                        <li>
                            <a href="{{ route('hubungi.kami')  }}">Hubungi Kami</a>
                        </li>

                    </ul>
                    <!-- End Sub -->

                </li>
                <!-- /tentang kami -->

                <!-- karir -->
                <li>
                    <a href="{{ route('karir')  }}" class="active">Karir</a>
                </li>
                <!-- /karir -->

                <!-- umart mind -->

                <li>
                    <a href="{{ route('umart.mind')  }}" class="active">UMART MIND</a>
                </li>

                <!-- /umart mind -->

                <!-- Divider -->
                <li><a>&nbsp;</a></li>
                <!-- End Divider -->

                <!-- Search -->
                @if (Auth::guest())
                  <li>
                      <a href="{{ route('user.login') }}" class="active">LOGIN</a>
                  </li>
                @else
                  <li>
                      <a href="{{ route('account') }}" class="mn-has-sub active">
                        @php
                        $firstName = Auth::user()->nama_anggota;
                        $arr = explode(' ',trim($firstName));
                        $nama = '';
                        if ($arr[0] == 'Hj.' || $arr[0] == 'HJ.' || $arr[0] == 'H.' || $arr[0] == 'DRA.' || $arr[0] == 'Dra.' || $arr[0] == 'Dr.' || $arr[0] == 'Drs.' || $arr[0] == 'S.' || $arr[0] == 'Ir.' || $arr[0] == 'IR.' || $arr[0] == 'R.' || $arr[0] == 'N.E.') {
                          $nama = $arr[1];
                        } else {
                          $nama = $arr[0];
                        }
                        if ($nama == 'Hj.' || $nama == 'HJ.' || $nama == 'H.' || $nama == 'DRA.' || $nama == 'Dra.' || $nama == 'Dr.' || $nama == 'Drs.' || $nama == 'S.' || $nama == 'Ir.' || $nama == 'IR.' || $nama == 'R.'|| $nama == 'N.E.') {
                          $nama = $arr[2];
                        } else {
                          $nama = $arr[0];
                        }
                        echo $nama;
                        @endphp
                         <i class="fa fa-angle-down white"></i></a>

                      <ul class="mn-sub to-left">
                        <li>
                          <a href="{{ route('account') }}">BERANDA</a>
                        </li>
                        <li>
                            <a href="{{ route('user.logout') }}"
                                onclick="event.preventDefault();
                                         document.getElementById('logout-form').submit();">
                                LOGOUT
                            </a>

                            <form id="logout-form" action="{{ route('user.logout') }}" method="POST" style="display: none;">
                                {{ csrf_field() }}
                            </form>
                        </li>
                      </ul>
                  </li>
                @endif
                <!-- End Search -->

                <!-- Cart -->
                <!-- <li>
                    <a href="#"><i class="fa fa-shopping-cart"></i> Cart(0)</a>
                </li> -->
                <!-- End Cart -->

                <!-- Languages -->
                <!-- <li>
                    <a href="#" class="mn-has-sub">Eng <i class="fa fa-angle-down"></i></a>

                    <ul class="mn-sub">

                        <li><a href="">English</a></li>
                        <li><a href="">France</a></li>
                        <li><a href="">Germany</a></li>

                    </ul>

                </li> -->
                <!-- End Languages -->

            </ul>
        </div>
        <!-- End Main Menu -->


    </div>
</nav>
<!-- End Navigation panel -->
