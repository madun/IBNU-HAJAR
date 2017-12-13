@extends('layouts.admin.app')

@section('title', 'UMART | Add Kategori')

@section('style')
  <!-- Datatables -->
  {{-- <link href="vendors/datatables.net-bs/css/dataTables.bootstrap.min.css" rel="stylesheet"> --}}
@endsection

@section('sidebar-left')
  @php
    $activePage = [
            'submenu' => 'y',
            'subname' => 'data_master',
            'name' => 'data_kurikulum',
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
            <h2>MASTER DATA &nbsp;<i class="fa fa-angle-right fa-lg"></i>&nbsp; <a href="{{ route('kurikulum.index') }}">DATA KURIKULUM</a> &nbsp;<i class="fa fa-angle-right fa-lg"></i>&nbsp; ADD KURIKULUM</h2>

            <div class="clearfix"></div>
          </div>
          <div class="x_content">
            <form class="form-horizontal form-label-left" method="post" action="{{ route('kurikulum.store') }}">
              {{ csrf_field() }}
              <div class="col-md-12">
                @if (count($errors) > 0)
                    @foreach ($errors->all() as $error)
                      <div class="alert alert-danger alert-dismissible fade in" role="alert">
                        <button type="button" class="close" data-dismiss="alert" aria-label="Close"><span aria-hidden="true">×</span>
                        </button>
                        <strong>{{ $error }}</strong>
                      </div>
                    @endforeach
                @endif
              </div>
              <div class="form-group">
                <label class="control-label col-md-3 col-sm-3 col-xs-12" for="first-name">Nama Kurikulum </label>
                <div class="col-md-6 col-sm-6 col-xs-12">
                  <input type="text" id="nama" name="nama" class="form-control col-md-7 col-xs-12" value="{{ old('nama') }}">
                </div>
              </div>
              <div class="ln_solid"></div>
              <div class="form-group">
                <div class="col-md-9 col-sm-9 col-xs-12 col-md-offset-3">
                  <button class="btn btn-primary" type="button">Cancel</button>
                  <button type="submit" class="btn btn-success">Save Data</button>
                </div>
              </div>

            </form>
          </div>
        </div>
      </div>
    </div>
@endsection

@section('script')
  <!-- Datatables -->
  {{-- <script src="vendors/datatables.net/js/jquery.dataTables.min.js"></script>
  <script src="vendors/datatables.net-bs/js/dataTables.bootstrap.min.js"></script> --}}
  {{-- <script type="text/javascript">
    $('#datatable').dataTable();
  </script> --}}
@endsection
