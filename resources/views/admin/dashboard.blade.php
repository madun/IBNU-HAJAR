@extends('layouts.admin.app')

@section('title', 'IBNU HAJAR | Dashboard')

@section('style')
  <!-- Datatables -->
  <link href="{{ asset('admin/vendors/datatables.net-bs/css/dataTables.bootstrap.min.css') }}" rel="stylesheet">
@endsection

@section('sidebar-left')
  @php
    $activePage = [
            'submenu' => 'n',
            'subname' => '',
            'name' => 'dashboard',
            'active' => 'active',
            'style' => 'display: block;',
            'curpage' => 'current-page'
    ]
  @endphp
  @include('layouts.admin.sidebar-left.sidebar', $activePage)
@endsection

@section('content')

  <meta name="csrf-token" content="{{ csrf_token() }}">
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

            {{-- <div class="pull-right">
              <a href="{{ route('presence.create') }}" class="btn btn-sm btn-success"><i class="fa fa-plus"></i> ADD PRESENCE</a>
            </div>  --}}
            <div class="clearfix"></div>
          </div>
          <div class="x_content">


            <div class="col-md-2">
                <div class="text-center">
                  <h1>
                    <b id="clock"></b>
                  </h1>
                  <h4 id="date"></h4>&nbsp;

                  <button id="btn_startPresence" onclick="startPresence()" class="btn btn-lg btn-success">START</button>
                </div>
            </div>

            <div class="col-md-10">
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
    </div>


  <div class="row">
    <div class="col-md-12 col-sm-12 col-xs-12">
      <div class="dashboard_graph">

        <div class="row x_title">
          <div class="col-md-6">
            <h3>Network Activities <small>Graph title sub-title</small></h3>
          </div>
          <div class="col-md-6">
            <div id="reportrange" class="pull-right" style="background: #fff; cursor: pointer; padding: 5px 10px; border: 1px solid #ccc">
              <i class="glyphicon glyphicon-calendar fa fa-calendar"></i>
              <span>December 30, 2014 - January 28, 2015</span> <b class="caret"></b>
            </div>
          </div>
        </div>

        <div class="col-md-9 col-sm-9 col-xs-12">
          <div id="chart_plot_01" class="demo-placeholder"></div>
        </div>
        <div class="col-md-3 col-sm-3 col-xs-12 bg-white">
          <div class="x_title">
            <h2>Top Campaign Performance</h2>
            <div class="clearfix"></div>
          </div>

          <div class="col-md-12 col-sm-12 col-xs-6">
            <div>
              <p>Facebook Campaign</p>
              <div class="">
                <div class="progress progress_sm" style="width: 76%;">
                  <div class="progress-bar bg-green" role="progressbar" data-transitiongoal="80"></div>
                </div>
              </div>
            </div>
            <div>
              <p>Twitter Campaign</p>
              <div class="">
                <div class="progress progress_sm" style="width: 76%;">
                  <div class="progress-bar bg-green" role="progressbar" data-transitiongoal="60"></div>
                </div>
              </div>
            </div>
          </div>
          <div class="col-md-12 col-sm-12 col-xs-6">
            <div>
              <p>Conventional Media</p>
              <div class="">
                <div class="progress progress_sm" style="width: 76%;">
                  <div class="progress-bar bg-green" role="progressbar" data-transitiongoal="40"></div>
                </div>
              </div>
            </div>
            <div>
              <p>Bill boards</p>
              <div class="">
                <div class="progress progress_sm" style="width: 76%;">
                  <div class="progress-bar bg-green" role="progressbar" data-transitiongoal="50"></div>
                </div>
              </div>
            </div>
          </div>

        </div>

        <div class="clearfix"></div>
      </div>
    </div>

  </div>
@endsection

@section('script')
  <!-- FastClick -->
  <script src="{{ url('admin/vendors/fastclick/lib/fastclick.js') }}"></script>
  <!-- bootstrap-progressbar -->
  <script src="{{ url('admin/vendors/bootstrap-progressbar/bootstrap-progressbar.min.js') }}"></script>
  <!-- Flot -->
  <script src="{{ url('admin/vendors/Flot/jquery.flot.js') }}"></script>
  <script src="{{ url('admin/vendors/Flot/jquery.flot.pie.js') }}"></script>
  <script src="{{ url('admin/vendors/Flot/jquery.flot.time.js') }}"></script>
  <script src="{{ url('admin/vendors/Flot/jquery.flot.stack.js') }}"></script>
  <script src="{{ url('admin/vendors/Flot/jquery.flot.resize.js') }}"></script>
  <!-- Flot plugins -->
  <script src="{{ url('admin/vendors/flot.orderbars/js/jquery.flot.orderBars.js') }}"></script>
  <script src="{{ url('admin/vendors/flot-spline/js/jquery.flot.spline.min.js') }}"></script>
  <script src="{{ url('admin/vendors/flot.curvedlines/curvedLines.js') }}"></script>
  <!-- DateJS -->
  <script src="{{ url('admin/vendors/DateJS/build/date.js') }}"></script>

  {{-- datatable --}}
  <script src="{{ asset('admin/vendors/datatables.net/js/jquery.dataTables.min.js') }}"></script>
  <script src="{{ asset('admin/vendors/datatables.net-bs/js/dataTables.bootstrap.min.js') }}"></script>

  {{-- vue js axios --}}
  {{-- <script type="text/javascript" src="{{ asset('js/js/app.js') }}"></script> --}}
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
    // });
  </script>
@endsection
