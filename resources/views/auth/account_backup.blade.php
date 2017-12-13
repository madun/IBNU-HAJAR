@extends('layouts.app')

@section('title', 'UMART - ACCOUNT')

@section('style')
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/highcharts/5.0.14/css/highcharts.css">
<!-- Datatables -->
  <link href="{{ asset('admin/vendors/datatables.net-bs/css/dataTables.bootstrap.min.css') }}" rel="stylesheet">
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
                  <button id="btn_startPresence" onclick="startPresence()" class="btn btn-lg btn-success">START</button>
                  <table id="datatable-fixed-header" class="table table-striped table-bordered">
                    <thead>
                      <tr>
                        <th width="30">No.</th>
                        <th>Nama</th>
                        <th>Start</th>
                        <th>End</th>
                        <th>Estimated Late</th>
                        <th>Status</th>
                        <th>Keterangan</th>
                        <th class="text-center">Action</th>
                      </tr>
                    </thead>
                    <tbody>
                      @foreach ($presence as $key)
                        <tr>
                          <td>{{$loop->index + 1}}</td>
                          <td>{{$key->user_id}}</td>
                          <td>{{$key->start}}</td>
                          <td>{{$key->end}}</td>
                          <td>{{$key->estimated}}</td>
                          <td>{{$key->status}}</td>
                          <td>{{$key->keterangan}}</td>
                          <td class="text-center">
                            <a href="{{ route('presenece.edit', $key->id) }}" style="color:orange;"><span class="fa fa-edit fa-lg"></span></a>
                            &nbsp;
                            <form id="delete-form-{{$key->id}}" action="{{ route('presenece.destroy', $key->id) }}" method="post" style="display: none">
                              {{ csrf_field() }}
                              {{ method_field('DELETE')}}
                            </form>
                            <a href="#"
                              onclick="
                              if(confirm('Hapus Data {{$key->user_id}} ?')){
                                event.preventDefault();
                                document.getElementById('delete-form-{{$key->id}}').submit();
                              }else{
                                event.preventDefault();
                              }
                              " style="color:red;">
                              <span class="fa fa-trash fa-lg"></span>
                            </a>
                          </td>
                        </tr>
                      @endforeach
                    </tbody>
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
  {{-- datatable --}}
  <script src="{{ asset('admin/vendors/datatables.net/js/jquery.dataTables.min.js') }}"></script>
  <script src="{{ asset('admin/vendors/datatables.net-bs/js/dataTables.bootstrap.min.js') }}"></script>

  <script type="text/javascript">
  function convertToRupiah(angka){
      var rupiah = '';
      var angkarev = angka.toString().split('').reverse().join('');
      for(var i = 0; i < angkarev.length; i++) if(i%3 == 0) rupiah += angkarev.substr(i,3)+'.';
      return rupiah.split('',rupiah.length-1).reverse().join('');
  }
  $(function() {
    $('#datatable-fixed-header').DataTable();

  });

  function startTime() {
    var today = new Date();
    var h = today.getHours();
    var m = today.getMinutes();
    var s = today.getSeconds();

    var dd = today.getDay();
    var mm = today.getMonth()+1;
    var yyyy = today.getFullYear();
    if(dd<10){
        dd='0'+dd;
    } 
    if(mm<10){
        mm='0'+mm;
    } 
    var today = dd+'-'+mm+'-'+yyyy;
    document.getElementById('date').innerHTML = today;

    h = checkTime(h);
    m = checkTime(m);
    s = checkTime(s);
    document.getElementById('clock').innerHTML = h + ":" + m + ":" + s;
    var t = setTimeout(startTime, 500);

    var getArray = document.getElementById('clock').innerHTML;
    var res = getArray.split(":");
    // alert();
    var maxH = 24;
    var maxM = 60;
    var maxS = 60;

    if(res[0] == 11 && res[1] >= 23 && res[2] >= 00){
      $('#btn_startPresence').prop('disabled', true);
    } 
    if(res[0] == 11 && res[1] >= 25 && res[2] >= 00) {
      $('#btn_startPresence').prop('disabled', false);
    }
    // on tag body in app.blade.php onload startime()
}
function checkTime(i) {
    if (i < 10) {i = "0" + i};  // add zero in front of numbers < 10
    return i;
}

function startPresence(){
  var clock = document.getElementById('clock').innerHTML;
  $.ajax({
    headers: {
      'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
    },
    type : 'POST',
    data : {clock:clock},
    url : "{{ route('presence.store') }}",
    success : function(result){
      console.log(result);
    }
  });
}
  </script>
@endsection
