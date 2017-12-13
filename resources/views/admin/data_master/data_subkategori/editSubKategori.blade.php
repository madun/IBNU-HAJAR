@extends('layouts.admin.app')

@section('title', 'UMART | Edit Sub Kategori')

@section('style')
  <!-- Datatables -->
  {{-- <link href="vendors/datatables.net-bs/css/dataTables.bootstrap.min.css" rel="stylesheet"> --}}
@endsection

@section('sidebar-left')
  @php
    $activePage = [
            'submenu' => 'y',
            'subname' => 'data_master',
            'name' => 'data_subkategori',
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
            <h2>MASTER DATA &nbsp;<i class="fa fa-angle-right fa-lg"></i>&nbsp; <a href="{{ route('data_subkategori.index') }}">DATA SUB KATEGORI </a> &nbsp;<i class="fa fa-angle-right fa-lg"></i>&nbsp; EDIT SUB KATEGORI , {{ $subkategori->nama_subkategori }}</h2>

            <div class="clearfix"></div>
          </div>
          <div class="x_content">
            <form class="form-horizontal form-label-left" method="post" action="{{ route('data_subkategori.update', $subkategori->id) }}">
              {{ csrf_field() }}
              {{ method_field('PATCH') }}
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
              {{-- <div class="form-group">
                <label class="control-label col-md-3 col-sm-3 col-xs-12">Head Kategori</label>
                <div class="col-md-6 col-sm-6 col-xs-12">
                  <select class="form-control" name="kategori_id">
                    <option value=""> -- Select Head Kategori -- </option>
                    @foreach ($kategori as $key)
                      <option value="{{ $key->id }}">{{ $key->nama_kategori }}</option>
                    @endforeach
                  </select>
                </div>
              </div> --}}
              <div class="form-group">
                <label class="control-label col-md-3 col-sm-3 col-xs-12" for="first-name">Nama Sub Kategori </label>
                <div class="col-md-6 col-sm-6 col-xs-12">
                  <input type="text" id="nama_subkategori" name="nama_subkategori" class="form-control col-md-7 col-xs-12" value="{{ $subkategori->nama_subkategori}}">
                </div>
              </div>
              <div class="form-group">
                <label class="control-label col-md-3 col-sm-3 col-xs-12">Descripttion</label>
                <div class="col-md-6 col-sm-6 col-xs-12">
                  {{-- <input id="birthday" class="date-picker form-control col-md-7 col-xs-12" required="required" type="text"> --}}
                  <textarea class="form-control col-md-7 col-xs-12" name="description" rows="8" cols="80">{{ $subkategori->description}}</textarea>
                </div>
              </div>
              <div class="ln_solid"></div>
              <div class="form-group">
                <div class="col-md-9 col-sm-9 col-xs-12 col-md-offset-3">
                  <a href="{{ route('data_subkategori.index') }}" class="btn btn-primary" type="button">Cancel</a>
		              <button class="btn btn-primary" type="reset">Reset</button>
                  <button type="submit" class="btn btn-success">Update</button>
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
