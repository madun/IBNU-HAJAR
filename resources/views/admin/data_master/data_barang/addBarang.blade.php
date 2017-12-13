@extends('layouts.admin.app')

@section('title', 'UMART | Add Barang')

@section('style')
  <!-- Datatables -->
  {{-- <link href="vendors/datatables.net-bs/css/dataTables.bootstrap.min.css" rel="stylesheet"> --}}
@endsection

@section('sidebar-left')
  @php
    $activePage = [
            'submenu' => 'y',
            'subname' => 'data_master',
            'name' => 'data_barang',
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
            <h2>MASTER DATA &nbsp;<i class="fa fa-angle-right fa-lg"></i>&nbsp; <a href="{{ route('data_barang.index') }}">DATA BARANG</a> &nbsp;<i class="fa fa-angle-right fa-lg"></i>&nbsp; ADD BARANG</h2>

            <div class="clearfix"></div>
          </div>
          <div class="x_content">
            <form class="form-horizontal form-label-left" method="post" action="{{ route('data_barang.store') }}">
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
                <label class="control-label col-md-3 col-sm-3 col-xs-12">Head Kategori</label>
                <div class="col-md-6 col-sm-6 col-xs-12">
                  <select class="form-control" name="kategori_id">
                    <option value=""> -- Select Head Kategori -- </option>
                    @foreach ($kategori as $key)
                      <option value="{{ $key->id }}">{{ $key->nama_kategori }}</option>
                    @endforeach
                  </select>
                </div>
              </div>
              <div class="form-group">
                <label class="control-label col-md-3 col-sm-3 col-xs-12">Sub Kategori 1</label>
                <div class="col-md-6 col-sm-6 col-xs-12">
                  <select class="form-control" name="subkategori_id">
                    <option value=""> -- Select Sub Kategori 1 -- </option>
                    @foreach ($subkategori as $key)
                      <option value="{{ $key->id }}">{{ $key->nama_subkategori }}</option>
                    @endforeach
                  </select>
                </div>
              </div>
              <div class="form-group">
                <label class="control-label col-md-3 col-sm-3 col-xs-12">Sub Kategori 2</label>
                <div class="col-md-6 col-sm-6 col-xs-12">
                  <select class="form-control" name="itemkategori_id">
                    <option value=""> -- Select Sub Kategori 2 -- </option>
                    @foreach ($itemkategori as $key)
                      <option value="{{ $key->id }}">{{ $key->nama_item }}</option>
                    @endforeach
                  </select>
                </div>
              </div>
              <div class="form-group">
                <label class="control-label col-md-3 col-sm-3 col-xs-12" for="first-name">Nama Barang </label>
                <div class="col-md-6 col-sm-6 col-xs-12">
                  <input type="text" id="nama_barang" name="nama_barang" class="form-control col-md-7 col-xs-12" value="{{ old('nama_barang') }}">
                </div>
              </div>
              <div class="form-group">
                <label for="middle-name" class="control-label col-md-3 col-sm-3 col-xs-12">Brand</label>
                <div class="col-md-6 col-sm-6 col-xs-12">
                  <input id="brand" name="brand" class="form-control col-md-7 col-xs-12" type="text" name="middle-name" value="{{ old('brand') }}">
                </div>
              </div>
              <div class="form-group">
                <label class="control-label col-md-3 col-sm-3 col-xs-12">Satuan</label>
                <div class="col-md-6 col-sm-6 col-xs-12">
                  <select class="form-control" name="satuan_barang_id">
                    <option value=""> -- Select Satuan -- </option>
                    @foreach ($satuan as $key)
                      <option value="{{ $key->id }}">{{ $key->nama_satuan }}</option>
                    @endforeach
                  </select>
                </div>
              </div>

              <div class="form-group">
                <label for="middle-name" class="control-label col-md-3 col-sm-3 col-xs-12">Harga Beli</label>
                <div class="col-md-6 col-sm-6 col-xs-12">
                  <input id="harga_beli" name="harga_beli" class="form-control col-md-7 col-xs-12" type="text" name="middle-name" value="{{ old('harga_beli') }}">
                </div>
              </div>

              <div class="form-group">
                <label for="middle-name" class="control-label col-md-3 col-sm-3 col-xs-12">Harga Jual</label>
                <div class="col-md-6 col-sm-6 col-xs-12">
                  <input id="harga_jual" name="harga_jual" class="form-control col-md-7 col-xs-12" type="text" name="middle-name" value="{{ old('harga_jual') }}">
                </div>
              </div>
              <div class="ln_solid"></div>
              <div class="form-group">
                <div class="col-md-9 col-sm-9 col-xs-12 col-md-offset-3">
                  <button class="btn btn-primary" type="button">Cancel</button>
		              <button class="btn btn-primary" type="reset">Reset</button>
                  <button type="submit" class="btn btn-success">Submit</button>
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
