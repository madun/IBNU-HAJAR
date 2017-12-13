@extends('layouts.app')

@section('title', 'UMART - ACCOUNT')

@section('style')
{{-- <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/highcharts/5.0.14/css/highcharts.css"> --}}
@endsection

@section('content')
  <meta name="csrf-token" content="{{csrf_token()}}">

  <section class="page-section mt-sm-20">
      <div class="container relative">

          <div class="row">
              <div class="col-sm-12">
                <div id="jmlSaham"></div>
              </div>


              <!-- Sidebar -->
              @include('layouts.sidebar-left')
              <!-- End Sidebar -->
              <!-- Content -->

              <div class="col-sm-8 col-md-offset-1">

                <div class="span3 col-sm-12">
                    <center>
                        <h3>LAPORAN PERBULAN</h3>
            		    </center>
                </div>

                <div class="col-sm-12">
                  <table class="table table-hover">
                    {{-- <tbody> --}}
                      {{-- <tr>
                        <td><b>No Sertifikat Saham</b></td>
                        <td><input type="hidden" id="id" name="" value="{{ Auth::user()->n_noidentitas }}">{{ Auth::user()->n_noidentitas }}</td>
                      </tr> --}}
                      {{-- <tr>
                        <td colspan="2"><b>Besaran Saham</b></td>
                      </tr>
                      <tr>
                        <td>1</td>
                        <td>2</td>
                      </tr> --}}
                    {{-- </tbody> --}}
                  </table>
                </div>


              <!-- End Content -->

          </div>

      </div>
  </section>
@endsection

@section('script')
  {{-- <script src="{{ asset('highchart/code/highcharts.js') }}"></script> --}}
  {{-- <script src="https://code.highcharts.com/modules/exporting.js"></script> --}}

  <script type="text/javascript">
  function convertToRupiah(angka){
      var rupiah = '';
      var angkarev = angka.toString().split('').reverse().join('');
      for(var i = 0; i < angkarev.length; i++) if(i%3 == 0) rupiah += angkarev.substr(i,3)+'.';
      return rupiah.split('',rupiah.length-1).reverse().join('');
  }
  $(function() {


  });
  </script>
@endsection
