@extends('layouts.app')

@section('title', 'UMART - WARALABA')

@section('header')
  <section class="page-section bg-dark-alfa-50 parallax-3" data-background="{{ url('image/ssumart-logo.png') }}">
      <div class="relative container align-left">

          <div class="row">

              <div class="col-md-8">
                  <h1 class="font-alt mb-20 mb-xs-0">Lokasi Kantor</h1>
                  <div class="hs-line-4 font-alt">
                      dari umat - oleh umat - untuk umat
                  </div>
              </div>

              <div class="col-md-4 mt-30">
                  <div class="mod-breadcrumbs font-alt align-right">
                      <a href="#">Home</a>&nbsp;/&nbsp;<a href="#">Pages</a>&nbsp;/&nbsp;<span>Lokasi Kantor</span>
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
              <!-- Why Choose Us? -->
          </h2>

          <!-- Features Grid -->
          <div class="row multi-columns-row alt-features-grid">

              <!-- Features Item -->
              <div class="col-sm-8 col-md-6 col-lg-6">
                  <div class="alt-features-item align-center">
                      <div class="alt-features-icon">
                          <span class="icon-flag"></span>
                      </div>
                      <h1 class="alt-features-title font-alt">Kantor Sekretariat</h1>
                      <div class="alt-features-descr align-left">

                          KOMPLEK PESANTREN IBNU HAJAR
                       <p>
                          JALAN KENCANA WANGI UTARA II|RT. 10 - RW. 13|KELURAHAN CIJAWURA|KECAMATAN BUAH BATU|KOTA BANDUNG
                       </p>

                      </div>
                  </div>
              </div>
              <!-- End Features Item -->

              <!-- Features Item -->
              <div class="col-sm-8 col-md-6 col-lg-6">
                  <div class="alt-features-item align-center">
                      <div class="alt-features-icon">
                          <span class="icon-clock"></span>
                      </div>
                      <h1 class="alt-features-title font-alt">Kantor Operasional</h1>
                      <div class="alt-features-descr align-left">

                          GERAI MINI MARKET U-MART
                       <p>
                          JALAN RAYA BANJARAN NO. 428|KECAMATAN PAMEUMPEUK|KABUPATEN BANDUNG
                       </p>

                      </div>
                  </div>
              </div>
          </div>
      </div>
  </section>
@endsection
