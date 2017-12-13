@extends('layouts.admin.app')

@section('title', 'UMART | LIST POST')

@section('style')
  <!-- Datatables -->
  <link href="{{ asset('admin/vendors/datatables.net-bs/css/dataTables.bootstrap.min.css') }}" rel="stylesheet">
@endsection

@section('sidebar-left')
  @php
    $activePage = [
            'submenu' => 'y',
            'subname' => 'berita',
            'name' => 'perusahaan',
            'active' => 'active',
            'style' => 'display: block;',
            'curpage' => 'current-page'
    ]
  @endphp
  @include('layouts.admin.sidebar-left.sidebar', $activePage)
@endsection

@section('content')
    <div class="row">
      <div class="col-md-12 col-sm-12 col-xs-12">
        <div class="x_panel tile">
          <div class="x_title">
            <h2>BERITA &nbsp;<i class="fa fa-angle-right fa-lg"></i>&nbsp; LIST POST PERUSAHAAN</h2> <a href="{{ route('berita-perusahaan.create') }}" class="btn btn-sm btn-success pull-right"><i class="fa fa-plus"></i> ADD POST</a>

            <div class="clearfix"></div>
          </div>
          <div class="x_content">
            {{-- get status edit/add/delete --}}
            @if (session('status'))
              <div class="alert alert-success alert-dismissible fade in" role="alert">
                <button type="button" class="close" data-dismiss="alert" aria-label="Close"><span aria-hidden="true">×</span>
                </button>
                <strong>{{ session('status') }}</strong>
              </div>
            @endif

            <table id="tb-listPost" class="table table-striped table-bordered">
              <thead>
                <tr>
                  <th>TITLE</th>
                  <th>SUBTITLE</th>
                  <th>SLUG</th>
                  <th>STATUS</th>
                  {{-- <th></th> --}}
                </tr>
              </thead>
              <tbody>
                @foreach ($berita as $key)
                  <tr>
                    <td>{{$key->title}}</td>
                    <td>{{$key->subtitle}}</td>
                    <td>{{$key->slug}}</td>
                    <td>{{$key->status}}</td>
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
    $('#tb-listPost').dataTable();
  </script>
@endsection
