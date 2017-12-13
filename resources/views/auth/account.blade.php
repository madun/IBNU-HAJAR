@extends('layouts.app')

@section('title', 'UMART - ACCOUNT')

@section('style')
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/highcharts/5.0.14/css/highcharts.css">
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
                        @php
                        $no = Auth::user()->n_noidentitas;
                        $generateQR = Hash::make($no);
                        @endphp
                        {{-- ini {{ Hash::check(Auth::user()->n_noidentitas,$generateQR) }} --}}
                        <b><i>QR CODE</i></b>
                        <br>
                        <img id="qrcode" src="data:image/png;base64, {!! base64_encode(QrCode::format('png')->margin(0)->size(250)->errorCorrection('H')->merge('image/slide-b1.png', .3, true)->generate($generateQR)) !!} ">
                      <h3>{{ Auth::user()->nama_anggota }}</h3>
                      <br>
            		    </center>
                </div>

                <div class="col-sm-12">
                  <table class="table table-hover">
                    {{-- <tbody> --}}
                      <tr>
                        <td><b>No Sertifikat Saham</b></td>
                        <td><input type="hidden" id="id" name="" value="{{ Auth::user()->n_noidentitas }}">{{ Auth::user()->n_noidentitas }}</td>
                      </tr>
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
  <script src="{{ asset('highchart/code/highcharts.js') }}"></script>
  {{-- <script src="https://code.highcharts.com/modules/exporting.js"></script> --}}

  <script type="text/javascript">
  function convertToRupiah(angka){
      var rupiah = '';
      var angkarev = angka.toString().split('').reverse().join('');
      for(var i = 0; i < angkarev.length; i++) if(i%3 == 0) rupiah += angkarev.substr(i,3)+'.';
      return rupiah.split('',rupiah.length-1).reverse().join('');
  }
  $(function() {
    // console.log("hai");
    var user_id = $('#id').val();
    $.ajax({
      type : 'POST',
      data : {user_id : user_id},
      url : "{{ route('getDetailSaham') }}", // route di api
      success : function(result){

        Highcharts.chart('jmlSaham', {

          credits: {
              enabled: false
          },
          title: {
              text: 'NOMINAL SAHAM "{{ Auth::user()->nama_anggota }}" BERDASARKAN GELOMBANG'
          },

          // subtitle: {
          //     text: 'Source: thesolarfoundation.com'
          // },
          tooltip: {
            formatter: function () {
                return this.x+' : <b>Rp. ' + convertToRupiah(this.y) + '</b>';
            }
          },
          yAxis: {
              title: {
                  text: ' '
              }
          },
          xAxis: {
              categories: ['','Gelombang 1','Gelombang 2','Gelombang 3', 'Gelombang 4', 'Gelombang 5']
          },
          legend: {
              // layout: 'horizontal',
              // align: 'right',
              // verticalAlign: 'middle'
              itemDistance: 50
          },

          plotOptions: {
              series: {
                  pointStart: 1
              }
          },

          series: [{
              name: 'Jumlah Saham',
              data: [result.data.jml_saham1, result.data.jml_saham2, result.data.jml_saham3, result.data.jml_saham4, result.data.jml_saham5],
              color: '#EF6C00'
          }]

        });
      }
    });


  });
  </script>
@endsection
