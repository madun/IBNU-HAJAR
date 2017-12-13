@extends('layouts.admin.app')

@section('title', 'IBNU HAJAR | Data Presence')

@section('style')
  <!-- Datatables -->
  <link href="{{ asset('admin/vendors/datatables.net-bs/css/dataTables.bootstrap.min.css') }}" rel="stylesheet">
@endsection

@section('sidebar-left')
  @php
    $activePage = [
            'submenu' => '-',
            'subname' => '-',
            'name' => 'presence',
            'active' => 'active',
            'style' => 'display: block;',
            'curpage' => 'current-page'
    ]
  @endphp
  @include('layouts.admin.sidebar-left.sidebar', $activePage)
@endsection

@section('content')
    {{-- get status edit/add/delete --}}
    @if (session('status'))
      <div class="row">
        <div class="col-md-12 col-sm-12 col-xs-12">
          <div class="alert alert-success alert-dismissible fade in" role="alert">
            <button type="button" class="close" data-dismiss="alert" aria-label="Close"><span aria-hidden="true">×</span>
            </button>
            <strong>{{ session('status') }}</strong>
          </div>
        </div>
      </div>
    @endif
    <div class="row">
      <div class="col-md-12 col-sm-12 col-xs-12">
        <div class="x_panel tile">
          <div class="x_title">
            <h2>MASTER DATA &nbsp;<i class="fa fa-angle-right fa-lg"></i>&nbsp; DATA PRESENCE</h2>
            <div class="pull-right">
              {{-- time --}}
              {{-- <h2>
                <span id="date"></span>&nbsp;
                <b id="clock"></b>
              </h2>
              &nbsp;&nbsp;&nbsp; --}}
              <a href="{{ route('presence.create') }}" class="btn btn-sm btn-success"><i class="fa fa-plus"></i> ADD PRESENCE</a>
            </div> 
            <div class="clearfix"></div>
          </div>
          <div class="x_content">
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
        </div>
      </div>
    </div>
@endsection

@section('script')
  <!-- Datatables -->
  <script src="{{ asset('admin/vendors/datatables.net/js/jquery.dataTables.min.js') }}"></script>
  <script src="{{ asset('admin/vendors/datatables.net-bs/js/dataTables.bootstrap.min.js') }}"></script>
  <script type="text/javascript">
    // $(document).ready(function() {
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

          m = checkTime(m);
          s = checkTime(s);
          document.getElementById('clock').innerHTML = h + ":" + m + ":" + s;
          var t = setTimeout(startTime, 500);
          // on tag body in app.blade.php onload startime()
      }
      function checkTime(i) {
          if (i < 10) {i = "0" + i};  // add zero in front of numbers < 10
          return i;
      }
    // });
  </script>
@endsection
