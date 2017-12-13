@extends('layouts.app')

@section('title', 'UMART')

@section('header')
  <section class="home-section bg-dark-alfa-70 parallax-2" data-background="{{ url('image/ssumart-logo.png') }}" id="home">
      <div class="js-height-full">

          <!-- Hero Content -->
          <div class="home-content container">
              <div class="home-text">
                
                  <h1 class="hs-line-11 font-alt mb-50 mb-xs-500 text-white">
                      <!-- dari umat - oleh umat - untuk umat -->
                      <span class="text-rotate">
                          dari umat,
                          oleh umat,
                          untuk umat
                      </span>
                  </h1>

                   <div class="local-scroll">
                     <a href="#" class="btn btn-mod btn-border-w btn-medium btn-round hidden-xs">Pendaftaran Anggota</a>
                     <span class="hidden-xs">&nbsp;</span>
                     <a href="#" class="btn btn-mod btn-border-w btn-medium btn-round hidden-xs">Pendataan Usaha</a>
                     <!-- <button type="button" class="btn btn-primary">Pendaftaran Anggota</button>
                      <span class="hidden-xs">&nbsp;</span>
                     <button type="button" class="btn btn-success">Pendataan Usaha</button> -->
                  </div>

              </div>
          </div>
          <!-- End Hero Content -->

          <!-- Scroll Down -->
          <div class="local-scroll">
              <a href="#about" class="scroll-down"><i class="fa fa-angle-down scroll-down-icon"></i></a>
          </div>
          <!-- End Scroll Down -->

      </div>
  </section>
@endsection

@section('content')
  <!-- About Section -->
  <section class="page-section" id="about">
      <div class="container relative">

          <h2 class="section-title font-alt align-left mb-70 mb-sm-40">
              About UMART

              <a href="{{ route('umart.mind') }}" class="section-more right">More about us <i class="fa fa-angle-right"></i></a>

          </h2>

          <div class="section-text">
              <div class="row">

                  <div class="col-md-4 mb-sm-50 mb-xs-30">
                      <div class="post-prev-img">
                          <center><img style="width:50%" src="{{ url('images/LOGO UMART.png') }}" alt=""/></center>
                      </div>
                  </div>
                  <!-- End Photo Item -->

                  <div class="col-md-4 col-sm-6 mb-sm-50 mb-xs-30">
                    <p class="text-justify">
                    Melalui karya berjamaah, sifat mementingkan diri sendiri (Ananiyyah) secara perlahan tapi pasti akan terkikis, diganti dengan sifat kebersamaan (Nahniyah). Selanjutnya akan membiasaan diri sebagai kader ‘amali dan berkepribadian ‘jama’i. Tidak merasa lebih penting dari yang lain, namun sebaliknya merasa tidak berarti apa-apa tanpa kebersamaan yang lainnya.
                    </p>
                  </div>

                  <div class="col-md-4 col-sm-6 mb-sm-50 mb-xs-30">
                    <p class="text-justify">
                    Mini market UMart adalah karya berjamaah (Amal Jama’i), bukan karya perorangan atau kelompok umat Islam tertentu.
                    </p>
                  </div>

              </div>
          </div>

      </div>
  </section>
  <!-- End About Section -->

  <!-- Divider -->
  <hr class="mt-0 mb-0 "/>
  <!-- End Divider -->

  <!-- Services Section -->
  <section class="page-section" id="services">
      <div class="container relative">

          <h2 class="section-title font-alt mb-70 mb-sm-40">
              Layanan
          </h2>

          <!-- Nav tabs -->
          <ul class="nav nav-tabs tpl-alt-tabs font-alt pt-30 pt-sm-0 pb-30 pb-sm-0">
              <li class="active">
                  <a href="#service-branding" data-toggle="tab">

                      <div class="alt-tabs-icon">
                          <i class="fa fa-shopping-cart fa-1x"></i>
                      </div>

                      Pembelian
                  </a>
              </li>
              <li>
                  <a href="#service-web-design" data-toggle="tab">

                      <div class="alt-tabs-icon">
                          <i class="fa fa-money fa-1x"></i>
                      </div>

                      Pembayaran
                  </a>
              </li>
              <li>
                  <a href="#service-graphic" data-toggle="tab">

                      <div class="alt-tabs-icon">
                          <i class="fa fa-refresh fa-1x"></i>
                      </div>

                      isi saldo
                  </a>
              </li>
              <li>
                  <a href="#service-development" data-toggle="tab">

                      <div class="alt-tabs-icon">
                          <i class="fa fa-mail-forward fa-1x"></i>
                      </div>

                      Ambil Uang
                  </a>
              </li>
              <li>
                  <a href="#service-photography" data-toggle="tab">

                      <div class="alt-tabs-icon">
                          <i class="fa fa-phone fa-1x"></i>
                      </div>

                      Pemesanan
                  </a>
              </li>
          </ul>
          <!-- End Nav tabs -->

          <!-- Tab panes -->
          <div class="tab-content tpl-tabs-cont">

              <!-- Service Item -->
              <!-- <div class="tab-pane fade in active" id="service-branding">

                  <div class="section-text">
                      <div class="row">
                          <div class="col-md-4 mb-md-40 mb-xs-30">
                              <blockquote class="mb-0">
                                  <p>
                                      A&nbsp;brand for a&nbsp;company is&nbsp;like a&nbsp;reputation
                                      for a&nbsp;person. You earn reputation by&nbsp;trying to&nbsp;do&nbsp;hard
                                      things well.
                                  </p>
                                  <footer>
                                      Jeff Bezos
                                  </footer>
                              </blockquote>
                          </div>
                          <div class="col-md-4 col-sm-6 mb-sm-50 mb-xs-30">
                              Maecenas  volutpat, diam enim sagittis quam, id porta quam. Sed id dolor consectetur fermentum
                              volutpat nibh, accumsan purus. Lorem ipsum dolor sit semper amet, consectetur adipiscing elit.
                              In maximus ligula metus pellentesque mattis.
                          </div>
                          <div class="col-md-4 col-sm-6 mb-sm-50 mb-xs-30">
                              Donec vel ultricies purus. Nam dictum sem, ipsum aliquam . Etiam sit amet fringilla lacus.
                              Pellentesque suscipit ante at ullamcorper pulvinar neque porttitor. Integer lectus.
                              Praesent sed nisi eleifend, fermentum orci amet, iaculis libero.
                          </div>
                      </div>
                  </div>

              </div> -->
              <!-- End Service Item -->

              <!-- Service Item -->
              <!-- <div class="tab-pane fade" id="service-web-design">

                  <div class="section-text">
                      <div class="row">
                          <div class="col-md-4 mb-md-40 mb-xs-30">
                              <blockquote class="mb-0">
                                  <p>
                                      It&nbsp;doesn&rsquo;t matter how many times&nbsp;I have to&nbsp;click, as&nbsp;long
                                      as&nbsp;each click is&nbsp;a&nbsp;mindless, unambiguous choice.
                                  </p>
                                  <footer>
                                      Steve Krug
                                  </footer>
                              </blockquote>
                          </div>
                          <div class="col-md-4 col-sm-6 mb-sm-50 mb-xs-30">
                              Cras mi tortor, laoreet id ornare et, accumsan non magna. Maecenas vulputate accumsan velit.
                              Curabitur a nulla ex. Nam a tincidunt ante. Vitae gravida turpis. Vestibulum varius
                              nulla non nulla scelerisque tristique.
                          </div>
                          <div class="col-md-4 col-sm-6 mb-sm-50 mb-xs-30">
                              Mauris id viverra augue, eu porttitor diam. Praesent faucibus est a interdum elementum.
                              Nam varius at ipsum id dignissim. Nam a tincidunt ante lorem. Pellentesque suscipit ante
                              at ullamcorper pulvinar neque porttitor.
                          </div>
                      </div>
                  </div>

              </div> -->
              <!-- End Service Item -->

              <!-- Service Item -->
              <!-- <div class="tab-pane fade" id="service-graphic">

                  <div class="section-text">
                      <div class="row">
                          <div class="col-md-4 mb-md-40 mb-xs-30">
                              <blockquote class="mb-0">
                                  <p>
                                      Never fall in&nbsp;love with an&nbsp;idea. They&rsquo;re whores. If&nbsp;the one you&rsquo;re with isn&rsquo;t doing the job, there&rsquo;s always another.
                                  </p>
                                  <footer>
                                      Chip Kidd
                                  </footer>
                              </blockquote>
                          </div>
                          <div class="col-md-4 col-sm-6 mb-sm-50 mb-xs-30">
                              Lorem ipsum dolor sit semper amet, consectetur adipiscing elit. In maximus ligula metus pellentesque
                              mattis. Donec vel ultricies purus. Nam dictum sem, ipsum aliquam . Praesent sed nisi eleifend,
                              fermentum orci amet, iaculis libero.
                          </div>
                          <div class="col-md-4 col-sm-6 mb-sm-50 mb-xs-30">

                              Pellentesque suscipit ante at ullamcorper pulvinar neque porttitor. Integer lectus. Etiam sit amet
                              fringilla lacus. Maecenas  volutpat, diam enim sagittis quam, id porta quam. Sed id&nbsp;dolor
                              consectetur fermentum volutpat nibh, accumsan purus.
                          </div>
                      </div>
                  </div>

              </div> -->
              <!-- End Service Item -->

              <!-- Service Item -->
              <!-- <div class="tab-pane fade" id="service-development">

                  <div class="section-text">
                      <div class="row">
                          <div class="col-md-4 mb-md-40 mb-xs-30">
                              <blockquote class="mb-0">
                                  <p>
                                      All that is&nbsp;valuable in&nbsp;human society depends upon the opportunity for development accorded the individual.
                                  </p>
                                  <footer>
                                      Albert Einstein
                                  </footer>
                              </blockquote>
                          </div>
                          <div class="col-md-4 col-sm-6 mb-sm-50 mb-xs-30">
                              Fusce hendrerit vitae nunc id gravida. Donec euismod quis ante at mattis. Mauris dictum ante sit
                              amet enim interdum semper. Vestibulum odio justo, faucibus et dictum eu, malesuada nec neque.
                              Maecenas  volutpat, diam enim sagittis.
                          </div>
                          <div class="col-md-4 col-sm-6 mb-sm-50 mb-xs-30">
                              Pellentesque suscipit ante at ullamcorper pulvinar neque porttitor. Sed id dolor consectetur fermentum
                              volutpat nibh, accumsan purus. Lorem ipsum dolor sit semper amet, consectetur adipiscing elit.
                              Inmed maximus ligula metus pellentesque.
                          </div>
                      </div>
                  </div>

              </div> -->
              <!-- End Service Item -->

              <!-- Service Item -->
              <!-- <div class="tab-pane fade" id="service-photography">

                  <div class="section-text">
                      <div class="row">
                          <div class="col-md-4 mb-md-40 mb-xs-30">
                              <blockquote class="mb-0">
                                  <p>
                                      Photography is&nbsp;the simplest thing in&nbsp;the world, but it&nbsp;is&nbsp;incredibly
                                      complicated to&nbsp;make it&nbsp;really work.
                                  </p>
                                  <footer>
                                      Martin Parr
                                  </footer>
                              </blockquote>
                          </div>
                          <div class="col-md-4 col-sm-6 mb-sm-50 mb-xs-30">
                              Donec vel ultricies purus. Nam dictum sem, ipsum aliquam . Etiam sit amet fringilla lacus.
                              Pellentesque suscipit ante at ullamcorper pulvinar neque porttitor. Integer lectus.
                              Praesent sed nisi eleifend, fermentum orci amet, iaculis libero.
                          </div>
                          <div class="col-md-4 col-sm-6 mb-sm-50 mb-xs-30">
                              Maecenas  volutpat, diam enim sagittis quam, id porta quam. Sed id dolor consectetur fermentum
                              volutpat nibh, accumsan purus. Lorem ipsum dolor sit semper amet, consectetur adipiscing elit.
                              In maximus ligula metus pellentesque mattis.
                          </div>
                      </div>
                  </div>

              </div> -->
              <!-- End Service Item -->

          </div>

          <!-- End Tab panes -->

          <div class="align-center">
              <a href="pages-services-1.html" class="section-more font-alt">Lihat Semua Layanan <i class="fa fa-angle-right"></i></a>
          </div>

      </div>
  </section>
  <!-- End Services Section -->


  <!-- Call Action Section -->
  <section class="page-section pt-0 pb-0 banner-section bg-dark-alfa-70" data-background="image/Monas_jam_8.30.png">
      <div class="container relative">

          <div class="row">

              <div class="col-sm-6">

                  <div class="mt-140 mt-lg-80 mb-140 mb-lg-80">
                      <div class="banner-content">
                          <h3 class="banner-heading font-alt">Looking for exclusive digital services?</h3>
                          <div class="banner-decription">
                              Proin fringilla augue at maximus vestibulum. Nam pulvinar vitae neque et porttitor.
                              Integer non dapibus diam, ac eleifend lectus.
                          </div>
                          <div class="local-scroll">
                              <a href="pages-contact-1.html" class="btn btn-mod btn-w btn-medium btn-round">Lets talk</a>
                          </div>
                      </div>
                  </div>

              </div>

              <div class="col-sm-6 banner-image wow fadeInUp">
  <!--                            <img src="images/promo-1.png" alt="" />-->
              </div>

          </div>

      </div>
  </section>
  <!-- End Call Action Section -->


  <!-- Process Section -->
  <section class="page-section">
      <div class="container relative">

          <!-- Features Grid -->
          <div class="row alt-features-grid">

              <!-- Text Item -->
              <div class="col-sm-3">
                  <div class="alt-features-item align-center">
                      <div class="alt-features-descr align-left">
                          <h4 class="mt-0 font-alt">Work process</h4>
                          Lorem ipsum dolor sit amet, c-r adipiscing elit.
                          In maximus ligula semper metus pellentesque mattis.
                          Maecenas  volutpat, diam enim.
                      </div>
                  </div>
              </div>
              <!-- End Text Item -->

              <!-- Features Item -->
              <div class="col-sm-3">
                  <div class="alt-features-item align-center">
                      <div class="alt-features-icon">
                          <span class="icon-chat"></span>
                      </div>
                      <h3 class="alt-features-title font-alt">1. Discuss</h3>
                  </div>
              </div>
              <!-- End Features Item -->

              <!-- Features Item -->
              <div class="col-sm-3">
                  <div class="alt-features-item align-center">
                      <div class="alt-features-icon">
                          <span class="icon-browser"></span>
                      </div>
                      <h3 class="alt-features-title font-alt">2. Make</h3>
                  </div>
              </div>
              <!-- End Features Item -->

              <!-- Features Item -->
              <div class="col-sm-3">
                  <div class="alt-features-item align-center">
                      <div class="alt-features-icon">
                          <span class="icon-heart"></span>
                      </div>
                      <h3 class="alt-features-title font-alt">3. Product</h3>
                  </div>
              </div>
              <!-- End Features Item -->

         </div>
         <!-- End Features Grid -->

      </div>
  </section>
  <!-- End Process Section -->


  <!-- Divider -->
  <hr class="mt-0 mb-0"/>
  <!-- End Divider -->


  <!-- Portfolio Section -->
  <section class="page-section pb-0" id="portfolio">
      <div class="relative">

          <h2 class="section-title font-alt mb-70 mb-sm-40">
              Latest Works
          </h2>

          <div class="container">
              <div class="row">
                  <div class="col-md-8 col-md-offset-2">

                      <div class="section-text align-center mb-70 mb-xs-40">
                          Curabitur eu adipiscing lacus, a iaculis diam. Nullam placerat blandit auctor. Nulla accumsan ipsum et nibh rhoncus, eget tempus sapien ultricies. Donec mollis lorem vehicula.
                      </div>

                  </div>
              </div>
          </div>

          <!-- Works Grid -->
          <ul class="works-grid work-grid-3 work-grid-gut clearfix font-alt hover-white hide-titles" id="work-grid">

              <!-- Work Item (External Page) -->
              <li class="work-item">
                  <a href="portfolio-single-1.html" class="work-ext-link">
                      <div class="work-img">
                          <img class="work-img" src="{{ url('images/portfolio/projects-13.jpg') }}" alt="Work" />
                      </div>
                      <div class="work-intro">
                          <h3 class="work-title">Man</h3>
                          <div class="work-descr">
                              External Page
                          </div>
                      </div>
                  </a>
              </li>
              <!-- End Work Item -->

              <!-- Work Item (External Page) -->
              <li class="work-item">
                  <a href="portfolio-single-1.html" class="work-ext-link">
                      <div class="work-img">
                          <img class="work-img" src="{{ url('images/portfolio/projects-14.jpg') }}" alt="Work" />
                      </div>
                      <div class="work-intro">
                          <h3 class="work-title">Woman</h3>
                          <div class="work-descr">
                              External Page
                          </div>
                      </div>
                  </a>
              </li>
              <!-- End Work Item -->

              <!-- Work Item (External Page) -->
              <li class="work-item">
                  <a href="portfolio-single-1.html" class="work-ext-link">
                      <div class="work-img">
                          <img class="work-img" src="{{ url('images/portfolio/projects-6.jpg') }}" alt="Work" />
                      </div>
                      <div class="work-intro">
                          <h3 class="work-title">Man with bag</h3>
                          <div class="work-descr">
                              External Page
                          </div>
                      </div>
                  </a>
              </li>
              <!-- End Work Item -->

          </ul>
          <!-- End Works Grid -->

      </div>
  </section>
  <!-- End Portfolio Section -->


  <!-- Call Action Section -->
  <section class="small-section bg-dark">
      <div class="container relative">

          <div class="align-center">
              <h3 class="banner-heading font-alt">Want to see more works?</h3>
              <div class="local-scroll">
                  <a href="portfolio-wide-gutter-3col.html" class="btn btn-mod btn-w btn-medium btn-round">Lets view portfolio</a>
              </div>
          </div>

      </div>
  </section>
  <!-- End Call Action Section -->


  <!-- Features Section -->
  <section class="page-section">
      <div class="container relative">

          @section('strategi', 'strategi umart')
          @include('produk_kami.strategi')

      </div>
  </section>
  <!-- End Features Section -->


  <!-- Testimonials Section -->
  <section class="page-section bg-dark bg-dark-alfa-70 fullwidth-slider" data-background="{{ url('image/ssumart-logo.png') }}">

      <!-- Slide Item -->
      <div>
          <div class="container relative">
              <div class="row">
                  <div class="col-md-8 col-md-offset-2 align-center">
                      <!-- Section Icon -->
                      <div class="section-icon">
                          <span class="icon-quote"></span>
                      </div>
                      <!-- Section Title --><h3 class="small-title font-alt">What people say?</h3>
                      <blockquote class="testimonial white">
                          <p>
                              Phasellus luctus commodo ullamcorper a posuere rhoncus commodo elit. Aenean congue,
                              risus utaliquam dapibus. Thanks!
                          </p>
                          <footer class="testimonial-author">
                              John Doe, doodle inc.
                          </footer>
                      </blockquote>
                  </div>
              </div>
          </div>
      </div>
      <!-- End Slide Item -->

      <!-- Slide Item -->
      <div>
          <div class="container relative">
              <div class="row">
                  <div class="col-md-8 col-md-offset-2 align-center">
                      <!-- Section Icon -->
                      <div class="section-icon">
                          <span class="icon-quote"></span>
                      </div>
                      <!-- Section Title --><h3 class="small-title font-alt">What people say?</h3>
                      <blockquote class="testimonial white">
                          <p>
                              Phasellus luctus commodo ullamcorper a posuere rhoncus commodo elit. Aenean congue,
                              risus utaliquam dapibus. Thanks!
                          </p>
                          <footer class="testimonial-author">
                              John Doe, doodle inc.
                          </footer>
                      </blockquote>
                  </div>
              </div>
          </div>
      </div>
      <!-- End Slide Item -->

      <!-- Slide Item -->
      <div>
          <div class="container relative">
              <div class="row">
                  <div class="col-md-8 col-md-offset-2 align-center">
                      <!-- Section Icon -->
                      <div class="section-icon">
                          <span class="icon-quote"></span>
                      </div>
                      <!-- Section Title --><h3 class="small-title font-alt">What people say?</h3>
                      <blockquote class="testimonial white">
                          <p>
                              Phasellus luctus commodo ullamcorper a posuere rhoncus commodo elit. Aenean congue,
                              risus utaliquam dapibus. Thanks!
                          </p>
                          <footer class="testimonial-author">
                              John Doe, doodle inc.
                          </footer>
                      </blockquote>
                  </div>
              </div>
          </div>
      </div>
      <!-- End Slide Item -->

  </section>
  <!-- End Testimonials Section -->


  <!-- Shop Section -->
  <section class="page-section">
      <div class="container relative">

          <h2 class="section-title font-alt align-left mb-70 mb-sm-40">
              Bestsellers

              <a href="{{ route('daftar.produk') }}" class="section-more right">Our Shop <i class="fa fa-angle-right"></i></a>

          </h2>

          <div class="row multi-columns-row">

              @include('produk_kami.list_produk')

          </div>

      </div>
  </section>
  <!-- End Shop Section -->


  <!-- Divider -->
  <hr class="mt-0 mb-0 "/>
  <!-- End Divider -->


  <!-- Divider -->
  <hr class="mt-0 mb-0 "/>
  <!-- End Divider -->


  <!-- Section -->
  <section class="page-section bg-dark-alfa-70 bg-scroll" data-background="{{ url('image/ssumart-logo.png') }}">
      <div class="container relative">

          <!-- Features Grid -->
          <div class="item-carousel owl-carousel">

              <!-- Features Item -->
              <div class="features-item">
                  <div class="features-icon">
                      <span class=" icon-hotairballoon"></span>
                  </div>
                  <div class="features-title font-alt">
                      We're Creative
                  </div>
                  <div class="features-descr">
                      We find the best ideas for you
                  </div>
              </div>
              <!-- End Features Item -->

              <!-- Features Item -->
              <div class="features-item">
                  <div class="features-icon">
                      <span class="icon-clock"></span>
                  </div>
                  <div class="features-title font-alt">
                      We’re Punctual
                  </div>
                  <div class="features-descr">
                      We always do your tasks on time
                  </div>
              </div>
              <!-- End Features Item -->

              <!-- Features Item -->
              <div class="features-item">
                  <div class="features-icon">
                      <span class="icon-lightbulb"></span>
                  </div>
                  <div class="features-title font-alt">
                      We have magic
                  </div>
                  <div class="features-descr">
                      You will be delighted
                  </div>
              </div>
              <!-- End Features Item -->

              <!-- Features Item -->
              <div class="features-item">
                  <div class="features-icon">
                      <span class="icon-wine"></span>
                  </div>
                  <div class="features-title font-alt">
                      We're Creative
                  </div>
                  <div class="features-descr">
                      We find the best ideas for you
                  </div>
              </div>
              <!-- End Features Item -->

              <!-- Features Item -->
              <div class="features-item">
                  <div class="features-icon">
                      <span class="icon-tools"></span>
                  </div>
                  <div class="features-title font-alt">
                      We’re Punctual
                  </div>
                  <div class="features-descr">
                      We always do your tasks on time
                  </div>
              </div>
              <!-- End Features Item -->

              <!-- Features Item -->
              <div class="features-item">
                  <div class="features-icon">
                      <span class="icon-gears"></span>
                  </div>
                  <div class="features-title font-alt">
                      We have magic
                  </div>
                  <div class="features-descr">
                      You will be delighted
                  </div>
              </div>
              <!-- End Features Item -->

              <!-- Features Item -->
              <div class="features-item">
                  <div class="features-icon">
                      <span class="icon-browser"></span>
                  </div>
                  <div class="features-title font-alt">
                      We're Creative
                  </div>
                  <div class="features-descr">
                      We find the best ideas for you
                  </div>
              </div>
              <!-- End Features Item -->

              <!-- Features Item -->
              <div class="features-item">
                  <div class="features-icon">
                      <span class="icon-wallet"></span>
                  </div>
                  <div class="features-title font-alt">
                      We’re Punctual
                  </div>
                  <div class="features-descr">
                      We always do your tasks on time
                  </div>
              </div>
              <!-- End Features Item -->

              <!-- Features Item -->
              <div class="features-item">
                  <div class="features-icon">
                      <span class="icon-document"></span>
                  </div>
                  <div class="features-title font-alt">
                      We have magic
                  </div>
                  <div class="features-descr">
                      You will be delighted
                  </div>
              </div>
              <!-- End Features Item -->

          </div>
          <!-- Features Grid -->

      </div>
  </section>
  <!-- End Section -->


  <!-- Blog Section -->
  <section class="page-section" id="news">
      <div class="container relative">

          <h2 class="section-title font-alt align-left mb-70 mb-sm-40">
              Latest News

              <a href="blog-classic-sidebar-right.html" class="section-more right">All News in our blog <i class="fa fa-angle-right"></i></a>

          </h2>

          <div class="row multi-columns-row">

              <!-- Post Item -->
              <div class="col-sm-6 col-md-4 col-lg-4 mb-md-50 wow fadeIn" data-wow-delay="0.1s" data-wow-duration="2s">

                  <div class="post-prev-img">
                      <a href="blog-single-sidebar-right.html"><img src="{{ url('images/blog/post-prev-1.jpg') }}" alt="" /></a>
                  </div>

                  <div class="post-prev-title font-alt">
                      <a href="">New Web Design Trends</a>
                  </div>

                  <div class="post-prev-info font-alt">
                      <a href="">John Doe</a> | 10 December
                  </div>

                  <div class="post-prev-text">
                      Maecenas  volutpat, diam enim sagittis quam, id porta quam. Sed id dolor
                      consectetur fermentum nibh volutpat, accumsan purus.
                  </div>

                  <div class="post-prev-more">
                      <a href="" class="btn btn-mod btn-gray btn-round">Read More <i class="fa fa-angle-right"></i></a>
                  </div>

              </div>
              <!-- End Post Item -->

              <!-- Post Item -->
              <div class="col-sm-6 col-md-4 col-lg-4 mb-md-50 wow fadeIn" data-wow-delay="0.2s" data-wow-duration="2s">

                  <div class="post-prev-img">
                      <a href="blog-single-sidebar-right.html"><img src="{{ url('images/blog/post-prev-2.jpg') }}" alt="" /></a>
                  </div>

                  <div class="post-prev-title font-alt">
                      <a href="">Minimalistic Design Forever</a>
                  </div>

                  <div class="post-prev-info font-alt">
                      <a href="">John Doe</a> | 9 December
                  </div>

                  <div class="post-prev-text">
                      Maecenas  volutpat, diam enim sagittis quam, id porta quam. Sed id dolor
                      consectetur fermentum nibh volutpat, accumsan purus.
                  </div>

                  <div class="post-prev-more">
                      <a href="" class="btn btn-mod btn-gray btn-round">Read More <i class="fa fa-angle-right"></i></a>
                  </div>

              </div>
              <!-- End Post Item -->

              <!-- Post Item -->
              <div class="col-sm-6 col-md-4 col-lg-4 mb-md-50 wow fadeIn" data-wow-delay="0.3s" data-wow-duration="2s">

                  <div class="post-prev-img">
                      <a href="blog-single-sidebar-right.html"><img src="{{ url('images/blog/post-prev-3.jpg') }}" alt="" /></a>
                  </div>

                  <div class="post-prev-title font-alt">
                      <a href="">Hipster&rsquo;s Style in&nbsp;Web</a>
                  </div>

                  <div class="post-prev-info font-alt">
                      <a href="">John Doe</a> | 7 December
                  </div>

                  <div class="post-prev-text">
                      Maecenas  volutpat, diam enim sagittis quam, id porta quam. Sed id dolor
                      consectetur fermentum nibh volutpat, accumsan purus.
                  </div>

                  <div class="post-prev-more">
                      <a href="" class="btn btn-mod btn-gray btn-round">Read More <i class="fa fa-angle-right"></i></a>
                  </div>

              </div>
              <!-- End Post Item -->

          </div>

      </div>
  </section>
  <!-- End Blog Section -->


  <!-- Newsletter Section -->
  <section class="small-section bg-gray-lighter">
      <div class="container relative">

          <form class="form align-center" id="mailchimp">
              <div class="row">
                  <div class="col-md-8 col-md-offset-2">

                      <div class="newsletter-label font-alt">
                          Stay informed with our newsletter
                      </div>

                      <div class="mb-20">
                          <input placeholder="Enter Your Email" class="newsletter-field form-control input-md round mb-xs-10" type="email" pattern=".{5,100}" required/>

                          <button type="submit" class="btn btn-mod btn-medium btn-round mb-xs-10">
                              Subscribe
                          </button>
                      </div>

                      <div class="form-tip">
                          <i class="fa fa-info-circle"></i> Please trust us, we will never send you spam
                      </div>

                      <div id="subscribe-result"></div>

                  </div>
              </div>
          </form>

      </div>
  </section>
  <!-- End Newsletter Section -->


  <!-- Contact Section -->
  <section class="page-section" id="contact">
      <div class="container relative">

          <h2 class="section-title font-alt mb-70 mb-sm-40">
              Find Us
          </h2>

          <div class="row">

              <div class="col-md-8 col-md-offset-2">
                  <div class="row">

                      <!-- Phone -->
                      <div class="col-sm-6 col-lg-4 pt-20 pb-20 pb-xs-0">
                          <div class="contact-item">
                              <div class="ci-icon">
                                  <i class="fa fa-phone"></i>
                              </div>
                              <div class="ci-title font-alt">
                                  Call Us
                              </div>
                              <div class="ci-text">
                                  +61 3 8376 6284
                              </div>
                          </div>
                      </div>
                      <!-- End Phone -->

                      <!-- Address -->
                      <div class="col-sm-6 col-lg-4 pt-20 pb-20 pb-xs-0">
                          <div class="contact-item">
                              <div class="ci-icon">
                                  <i class="fa fa-map-marker"></i>
                              </div>
                              <div class="ci-title font-alt">
                                  Address
                              </div>
                              <div class="ci-text">
                                  245 Quigley Blvd, Ste K
                              </div>
                          </div>
                      </div>
                      <!-- End Address -->

                      <!-- Email -->
                      <div class="col-sm-6 col-lg-4 pt-20 pb-20 pb-xs-0">
                          <div class="contact-item">
                              <div class="ci-icon">
                                  <i class="fa fa-envelope"></i>
                              </div>
                              <div class="ci-title font-alt">
                                  Email
                              </div>
                              <div class="ci-text">
                                  <a href="mailto:support@bestlooker.pro">support@bestlooker.pro</a>
                              </div>
                          </div>
                      </div>
                      <!-- End Email -->

                  </div>
              </div>

          </div>

      </div>
  </section>
  <!-- End Contact Section -->


  <!-- Call Action Section -->
  <section class="small-section bg-dark bg-dark-alfa-70">
      <div class="container relative">

          <div class="align-center">
              <h3 class="banner-heading font-alt">Want to discuss your new project?</h3>
              <div>
                  <a href="" class="btn btn-mod btn-w btn-medium btn-round">Lets tallk</a>
              </div>
          </div>

      </div>
  </section>
@endsection
