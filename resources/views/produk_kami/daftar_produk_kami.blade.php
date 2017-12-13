@extends('layouts.app')

@section('title', 'UMART - DAFTAR PRODUK')

@section('header')
  <section class="page-section bg-dark-alfa-50 parallax-3" data-background="{{ url('image/ssumart-logo.png') }}">
      <div class="relative container align-left">

          <div class="row">

              <div class="col-md-8">
                  <h1 class="font-alt mb-20 mb-xs-0">Daftar Produk</h1>
                  <div class="hs-line-4 font-alt">
                      dari umat - oleh umat - untuk umat
                  </div>
              </div>

              <div class="col-md-4 mt-30">
                  <div class="mod-breadcrumbs font-alt align-right">
                      <a href="#">Home</a>&nbsp;/&nbsp;<a href="#">Pages</a>&nbsp;/&nbsp;<span>Daftar Produk</span>
                  </div>

              </div>
          </div>

      </div>
  </section>
@endsection

@section('content')
  <section class="page-section">
      <div class="container relative">

          <div class="row">

              <!-- Content -->
              <div class="col-sm-12">

                  <!-- Shop options -->
                  <div class="clearfix mb-40">

                      <div class="left section-text mt-10">
                          Showing 1–12 of 23 results
                      </div>

                      <div class="right">
                          <form method="post" action="#" class="form">
                              <select class="input-md round">
                                  <option>Default sorting</option>
                                  <option>Sort by price: low to high</option>
                                  <option>Sort by price: high to low</option>
                              </select>
                          </form>
                      </div>

                  </div>
                  <!-- End Shop options -->

                  <div class="row multi-columns-row">

                      @include('produk_kami.list_produk')

                      <!-- Shop Item -->
                      <div class="col-md-3 col-lg-3 mb-60 mb-xs-40">

                          <div class="post-prev-img">

                              <a href="shop-single.html"><img src="images/shop/shop-prev-5.jpg" alt="" /></a>

                              <div class="intro-label">
                                  <span class="label label-danger bg-red">Sale</span>
                              </div>

                          </div>

                          <div class="post-prev-title font-alt align-center">
                              <a href="shop-single.html">G-Star Polo Applique Jersey</a>
                          </div>

                          <div class="post-prev-text align-center">
                              <del>$150.00</del>
                              &nbsp;
                              <strong>$94.75</strong>
                          </div>

                          <div class="post-prev-more align-center">
                              <a href="#" class="btn btn-mod btn-gray btn-round"><i class="fa fa-shopping-cart"></i> Add to cart</a>
                          </div>

                      </div>
                      <!-- End Shop Item -->

                      <!-- Shop Item -->
                      <div class="col-md-3 col-lg-3 mb-60 mb-xs-40">

                          <div class="post-prev-img">
                              <a href="shop-single.html"><img src="images/shop/shop-prev-6.jpg" alt="" /></a>
                          </div>

                          <div class="post-prev-title font-alt align-center">
                              <a href="shop-single.html">Only & Sons Pique Polo Shirt</a>
                          </div>

                          <div class="post-prev-text align-center">
                              <strong>$28.99</strong>
                          </div>

                          <div class="post-prev-more align-center">
                              <a href="#" class="btn btn-mod btn-gray btn-round"><i class="fa fa-shopping-cart"></i> Add to cart</a>
                          </div>

                      </div>
                      <!-- End Shop Item -->

                      <!-- Shop Item -->
                      <div class="col-md-3 col-lg-3 mb-60 mb-xs-40">

                          <div class="post-prev-img">
                              <a href="shop-single.html"><img src="images/shop/shop-prev-7.jpg" alt="" /></a>
                          </div>

                          <div class="post-prev-title font-alt align-center">
                              <a href="shop-single.html">Longline Long Sleeve</a>
                          </div>

                          <div class="post-prev-text align-center">
                              <strong>$39.99</strong>
                          </div>

                          <div class="post-prev-more align-center">
                              <a href="#" class="btn btn-mod btn-gray btn-round"><i class="fa fa-shopping-cart"></i> Add to cart</a>
                          </div>

                      </div>
                      <!-- End Shop Item -->

                      <!-- Shop Item -->
                      <div class="col-md-3 col-lg-3 mb-60 mb-xs-40">

                          <div class="post-prev-img">
                              <a href="shop-single.html"><img src="images/shop/shop-prev-8.jpg" alt="" /></a>
                          </div>

                          <div class="post-prev-title font-alt align-center">
                              <a href="shop-single.html">Polo Shirt With Floral Sleeves</a>
                          </div>

                          <div class="post-prev-text align-center">
                              <strong>$85.99</strong>
                          </div>

                          <div class="post-prev-more align-center">
                              <a href="#" class="btn btn-mod btn-gray btn-round"><i class="fa fa-shopping-cart"></i> Add to cart</a>
                          </div>

                      </div>
                      <!-- End Shop Item -->

                      <!-- Shop Item -->
                      <div class="col-md-3 col-lg-3 mb-60 mb-xs-40">

                          <div class="post-prev-img">
                              <a href="shop-single.html"><img src="images/shop/shop-prev-9.jpg" alt="" /></a>
                          </div>

                          <div class="post-prev-title font-alt align-center">
                              <a href="shop-single.html">Only & Sons Pique Polo Shirt</a>
                          </div>

                          <div class="post-prev-text align-center">
                              <strong>$28.99</strong>
                          </div>

                          <div class="post-prev-more align-center">
                              <a href="#" class="btn btn-mod btn-gray btn-round"><i class="fa fa-shopping-cart"></i> Add to cart</a>
                          </div>

                      </div>
                      <!-- End Shop Item -->

                      <!-- Shop Item -->
                      <div class="col-md-3 col-lg-3 mb-60 mb-xs-40">

                          <div class="post-prev-img">
                              <a href="shop-single.html"><img src="images/shop/shop-prev-10.jpg" alt="" /></a>
                          </div>

                          <div class="post-prev-title font-alt align-center">
                              <a href="shop-single.html">Only & Sons Pique Polo Shirt</a>
                          </div>

                          <div class="post-prev-text align-center">
                              <strong>$28.99</strong>
                          </div>

                          <div class="post-prev-more align-center">
                              <a href="#" class="btn btn-mod btn-gray btn-round"><i class="fa fa-shopping-cart"></i> Add to cart</a>
                          </div>

                      </div>
                      <!-- End Shop Item -->

                      <!-- Shop Item -->
                      <div class="col-md-3 col-lg-3 mb-60 mb-xs-40">

                          <div class="post-prev-img">
                              <a href="shop-single.html"><img src="images/shop/shop-prev-11.jpg" alt="" /></a>
                          </div>

                          <div class="post-prev-title font-alt align-center">
                              <a href="shop-single.html">Longline Long Sleeve</a>
                          </div>

                          <div class="post-prev-text align-center">
                              <strong>$39.99</strong>
                          </div>

                          <div class="post-prev-more align-center">
                              <a href="#" class="btn btn-mod btn-gray btn-round"><i class="fa fa-shopping-cart"></i> Add to cart</a>
                          </div>

                      </div>
                      <!-- End Shop Item -->

                      <!-- Shop Item -->
                      <div class="col-md-3 col-lg-3 mb-60 mb-xs-40">

                          <div class="post-prev-img">
                              <a href="shop-single.html"><img src="images/shop/shop-prev-12.jpg" alt="" /></a>
                          </div>

                          <div class="post-prev-title font-alt align-center">
                              <a href="shop-single.html">Polo Shirt With Floral Sleeves</a>
                          </div>

                          <div class="post-prev-text align-center">
                              <strong>$85.99</strong>
                          </div>

                          <div class="post-prev-more align-center">
                              <a href="#" class="btn btn-mod btn-gray btn-round"><i class="fa fa-shopping-cart"></i> Add to cart</a>
                          </div>

                      </div>
                      <!-- End Shop Item -->

                  </div>

                  <!-- Pagination -->
                  <div class="pagination pull-right">
                      <a href=""><i class="fa fa-angle-left"></i></a>
                      <a href="" class="active">1</a>
                      <a href="">2</a>
                      <a href="">3</a>
                      <a class="no-active">...</a>
                      <a href="">9</a>
                      <a href=""><i class="fa fa-angle-right"></i></a>
                  </div>
                  <!-- End Pagination -->

              </div>
              <!-- End Content -->


          </div>

      </div>
  </section>
@endsection
