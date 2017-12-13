@extends('layouts.app')

@section('title', 'IBNU HAJAR | Dashboard')

@section('style')
  <!-- Datatables -->
  <link href="{{ asset('admin/vendors/datatables.net-bs/css/dataTables.bootstrap.min.css') }}" rel="stylesheet">
@endsection

@section('content')
<meta name="csrf-token" content="{{ csrf_token() }}">
<div class="container">
    <div class="row">
        <div class="col-md-3">
            <div class="panel panel-default">
                <div class="panel-heading">Presence</div>

                <div class="panel-body">
                    <div class="text-center">
                      <h1>
                        <b id="clock"></b>
                      </h1>
                      <h4 id="date"></h4>&nbsp;
                      <br>
                      <br>
                      <button id="btn_startPresence" onclick="startPresence()" class="btn btn-success">START</button>
                    </div>
                </div>
            </div>
        </div>
        <div class="col-md-9">
            <div class="panel panel-default">
                <div class="panel-heading">Dashboard</div>

                <div class="panel-body">
                    @if (session('status'))
                        <div class="alert alert-success">
                            {{ session('status') }}
                        </div>
                    @endif

                    <table id="presence" class="table table-striped table-bordered">
                      <thead>
                        <tr>
                          <th>Nama</th>
                          <th>Start</th>
                          <th>End</th>
                          <th>Estimated Late</th>
                          <th>Status</th>
                          <th>Keterangan</th>
                          {{-- <th class="text-center">Action</th> --}}
                        </tr>
                      </thead>
                      <tbody>
                        @foreach ($presence as $key)
                          <tr>
                            <td>{{$key->user_id}}</td>
                            <td>{{$key->start}}</td>
                            <td>{{$key->end}}</td>
                            <td>{{$key->estimated}}</td>
                            <td>{{$key->status}}</td>
                            <td>{{$key->keterangan}}</td>
                            {{-- <td class="text-center">
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
                            </td> --}}
                          </tr>
                        @endforeach
                      </tbody>
                    </table>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection

@section('script')
<script src="{{ asset('admin/vendors/jquery/dist/jquery.min.js') }}"></script>
{{-- datatable --}}
<script src="{{ asset('admin/vendors/datatables.net/js/jquery.dataTables.min.js') }}"></script>
<script src="{{ asset('admin/vendors/datatables.net-bs/js/dataTables.bootstrap.min.js') }}"></script>

{{-- vue js axios --}}
{{-- <script type="text/javascript" src="{{ asset('js/js/app.js') }}"></script> --}}
<script type="text/javascript">
$(document).ready(function() { 
  $("#presence").DataTable();
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
        if(result.msg == 'success'){
          $("#presence").DataTable()
        }
      }
    });
  }
</script>
@endsection
