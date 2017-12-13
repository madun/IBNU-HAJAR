@extends('layouts.app')

@section('title', 'UMART - TENTANG ANGGOTA')

@section('header')
  <section class="page-section bg-dark-alfa-50 parallax-3" data-background="{{ url('image/ssumart-logo.png') }}">
        <div class="relative container align-left">

            <div class="row">

                <div class="col-md-8">
                    <h1 class="font-alt mb-20 mb-xs-0">Tentang Anggota</h1>
                    <div class="hs-line-4 font-alt">
                        dari umat - oleh umat - untuk umat
                    </div>
                </div>

                <div class="col-md-4 mt-30">
                    <div class="mod-breadcrumbs font-alt align-right">
                        <a href="#">Keanggotaan</a>&nbsp;/&nbsp;<span>Tentang Anggota</span>
                    </div>

                </div>
            </div>

        </div>
    </section>
@endsection

@section('content')
    <section class="page-section">
        <div class="container relative">

            <h2 class="section-title font-alt mb-70 mb-sm-40">
                Keanggotaan (Membership) UMart
            </h2>

            <!-- Row -->
            <div class="row">

                <!-- Col -->

                <div class="col-sm-8 col-sm-offset-2">

                    <!-- Nav Tabs -->
                    <div class="align-center mb-40 mb-xs-30">
                        <ul class="nav nav-tabs tpl-minimal-tabs animate">

                            <li class="active">
                                <a href="#mini-one" data-toggle="tab">Keuntungan</a>
                            </li>

                            <li>
                                <a href="#mini-two" data-toggle="tab">Pemegang saham</a>
                            </li>

                            <li>
                                <a href="#mini-three" data-toggle="tab">bukan pemegang saham</a>
                            </li>

                            {{-- <li>
                                <a href="#mini-three" data-toggle="tab">Third</a>
                            </li> --}}

                        </ul>
                    </div>
                    <!-- End Nav Tabs -->

                    <!-- Tab panes -->
                    <div class="tab-content tpl-minimal-tabs-cont section-text">

                        <div class="tab-pane fade in active" id="mini-one">
                          <ol class="text-justify">
                              <li>
                                Bergabung dengan barisan umat Islam dalam mewujudkan karya berjamaah sebagai manifestasi keimanan seorang muslim.
                              </li>
                              <li>
                                Bergabung dengan barisan umat Islam dalam revolusi pola pikir dan sifat ananiyyah (mementingkan diri sendiri).
                              </li>
                              <li>
                                Setiap nilai saham yang dikontribusikan untuk gerakan mini market Umart akan tercatat sebagai pahala berbuah surga.
                              </li>
                              <li>
                                Setiap nilai uang yang dibelanjakan pada mini market Umart dapat menopang perkembangan gerai Umart hingga berdiri di setiap pelosok daerah.
                              </li>
                              <li>
                                Dengan menjadi member UMart berarti umat Islam telah tercatat sebagai bagian dari barisan yang membangun Ekonomi Qurani secara berjamaah sebagai salah satu penopang pilar ibadah, syariah dan dakwah menuju kebahagiaan dunia dan keselamatan akhirat
                              </li>
                          </ol>
                        </div>

                        <div class="tab-pane fade" id="mini-two">
                          <ol class="text-justify">
                              <li>
                                Pemegang saham merupakan pemilik bersama mini market sesuai dengan besaran sahamnya,
                              </li>
                              <li>
                                Pemegang saham berhak mendapatkan informasi harga dan produk-produk baru yang dijual di Umart.
                              </li>
                              <li>
                                Pemegang saham berhak mendapatkan pelayanan prioritas Delivery order (layanan pesan antar) sesuai kebutuhan barang belanja yang dipesannya, baik secara reguler maupun temporer.
                              </li>
                              <li>
                                Pemegang saham berhak mendapatkan Virtual account yang berisi identitas pemilik saham, bukti sertifikat saham dan card member, laporan transparansi mulai dari transaksi, omset, nisbah bagi hasil dan jadwal Rapat Umum Pemegang Saham (RUPS), dan media transaksi keuangan
                              </li>
                              <li>
                                Pemegang saham berhak untuk menerima laporan usaha mini market dari direktur dan manajemen dalam rapat umum pemegang saham (RUPS) di akhir tahun
                              </li>
                              <li>
                                Pemegang saham berhak untuk menerima dividen yang diumumkan oleh dewan direksi. Dividen adalah bagian laba atau pendapatan perusahaan yg besarnya ditetapkan oleh direksi serta disahkan oleh rapat umum pemegang saham (RUPS) untuk dibagikan kepada para pemegang saham di akhir tahun.
                              </li>
                          </ol>
                        </div>

                        <div class="tab-pane fade" id="mini-three">
                          <ol class="text-justify">
                              <li>
                                Non Pemegang saham merupakan mitra usaha mini market umart.
                              </li>
                              <li>
                                Non Pemegang saham berhak mendapatkan informasi harga dan produk-produk baru yang dijual di Umart.
                              </li>
                          </ol>
				                </div>

                    </div>

                </div>

                <!-- End Col -->

            </div>
            <!-- End Row -->

        </div>
    </section>
@endsection
