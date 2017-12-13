@extends('layouts.app')

@section('title', 'UMART - CORPORATE')

@section('header')
  <section class="page-section bg-dark-alfa-50 parallax-3" data-background="{{ url('image/ssumart-logo.png') }}">
      <div class="relative container align-left">

          <div class="row">

              <div class="col-md-8">
                  <h1 class="font-alt mb-20 mb-xs-0">Corporate</h1>
                  <div class="hs-line-4 font-alt">
                      dari umat - oleh umat - untuk umat
                  </div>
              </div>

              <div class="col-md-4 mt-30">
                  <div class="mod-breadcrumbs font-alt align-right">
                      <a href="#">Home</a>&nbsp;/&nbsp;<a href="#">Pages</a>&nbsp;/&nbsp;<span>Corporate</span>
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
                Corporate

                <a href="#" class="section-more right">Selanjutnya Tentang Kami <i class="fa fa-angle-right"></i></a>

            </h2>

            <!-- Row -->
            <div class="row">

                <!-- Col -->

                <div class="col-sm-8 col-sm-offset-2">

                    <!-- Nav tabs -->
                    <ul class="nav nav-tabs tpl-tabs animate">
                        <li class="active">
                            <a href="#one" data-toggle="tab">U-Mart</a>
                        </li>

                    </ul>

                    <!-- Tab panes -->
                    <div class="tab-content tpl-tabs-cont section-text">
                        <ul>
                          <div class="tab-pane fade in active" id="one" style="text-align: justify;">
                                  Mini market U-Mart berada di bawah naungan PT. Asqilani Persada Pratama. PT. Asqilani didirikan oleh Pembina Pesantren Ibnu Hajar Asqilani dan para pendiri Yayasan Ibnu Hajar Asqilani (YIHA), pada tanggal 26 Oktober 2016 di hadapan Notaris Dra. Siti Mariam Danoeraharja, SH, dengan Akta Notaris No. 09 26 Oktober 2016, yang bergerak dalam bidang perdagangan umum.

                                  Pemegang saham PT. Asqilani adalah Pesantren Ibnu Hajar Asqilani dan para pendiri YIHA, dengan komposisi kepemilikan saham sebagai berikut:

                                  <li> Sebesar 55 % dimiliki oleh Pesantren Ibnu Hajar Asqilani</li>
                                  <li> Sebesar (45%) dimiliki oleh para pendiri YIHA, masing-masing sebesar 5 %.</li>

                                  Penambahan saham baru dari umat Islam yang tergabung dalam Komunitas YIHA dengan akad mudharabah muqayyadah (modal usaha khusus mini market).
  .
                          </div>
                        </ul>

                    </div>
            <!-- End Row -->

                </div>
            </div>
        </div>
  </section>
@endsection
