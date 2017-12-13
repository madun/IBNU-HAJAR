@extends('layouts.admin.app')

@section('title', 'UMART | Add Transaksi Penjualan')

@section('style')
  <!-- Datatables -->
  {{-- <link href="vendors/datatables.net-bs/css/dataTables.bootstrap.min.css" rel="stylesheet"> --}}
@endsection

@section('sidebar-left')
  @php
    $activePage = [
            'submenu' => 'y',
            'subname' => 'transaksi',
            'name' => 'penjualan',
            'active' => 'active',
            'style' => 'display: block;',
            'curpage' => 'current-page'
    ]
  @endphp
  @include('layouts.admin.sidebar-left.sidebar', $activePage)
@endsection

@section('content')
  <meta name="csrf-token" content="{{csrf_token()}}">

    <div class="row">
      <div class="col-md-12 col-sm-12 col-xs-12">
        <div class="x_panel tile">
          <div class="x_title">
            <h2>TRANSAKSI &nbsp;<i class="fa fa-angle-right fa-lg"></i>&nbsp; <a href="{{ route('transaksi_penjualan.index') }}">DATA PENJUALAN</a> &nbsp;<i class="fa fa-angle-right fa-lg"></i>&nbsp; ADD PENJUALAN</h2>

            <div class="clearfix"></div>
          </div>
          <div class="x_content">
            <!-- Smart Wizard -->
            {{-- <p>This is a basic form wizard example that inherits the colors from the selected scheme.</p> --}}
            <div id="wizard" class="form_wizard wizard_horizontal">
              <ul class="wizard_steps anchor">
                <li>
                  <a href="#step-1" class="done" isdone="1" rel="1">
                    <span class="step_no">1</span>
                    {{-- <span class="step_descr">Step 1<br> --}}
                        <small>Select Pelanggan</small>
                    </span>
                  </a>
                </li>
                <li>
                  <a href="#step-2" class="done" isdone="1" rel="2">
                    <span class="step_no">2</span>
                    {{-- <span class="step_descr">Step 2<br> --}}
                        <small>Choose Product</small>
                    </span>
                  </a>
                </li>
                <li>
                  <a href="#step-3" class="selected" isdone="1" rel="3">
                    <span class="step_no">3</span>
                    {{-- <span class="step_descr">Step 3<br> --}}
                        <small>Cart</small>
                    </span>
                  </a>
                </li>
                <li>
                  <a href="#step-4" class="disabled" isdone="0" rel="4">
                    <span class="step_no">4</span>
                    {{-- <span class="step_descr">Step 4<br> --}}
                        <small>Check Out Pelanggan</small>
                    </span>
                  </a>
                </li>
              </ul>

              <form class="form-horizontal form-label-left">
                <div class="stepContainer">
                  <div id="step-1" class="content" style="display: none;">
                    <form class="form-horizontal form-label-left">

                      <div class="form-group">
                        <label class="control-label col-md-3 col-sm-3 col-xs-12">Penjualan Kepada</label>
                        <div class="col-md-6 col-sm-6 col-xs-12">
                          <select class="form-control" name="pelanggan_id" onchange="setPelanggan(this.value)">
                            <option value=""> -- Select Pelanggan -- </option>
                            @foreach ($pelanggan as $key)
                              <option value="{{$key->id}}">{{$key->nama_perusahaan}} An. {{$key->nama_pelanggan}}</option>
                            @endforeach
                            {{-- @foreach ($kategori as $key)
                              <option value="{{ $key->id }}">{{ $key->nama_kategori }}</option>
                            @endforeach --}}
                          </select>
                        </div>
                      </div>


                  </div>
                  <div id="step-2" class="content" style="display: none;">
                    <div class="col-md-6">
                      <h2 class="StepTitle text-center">TO CART</h2>

                      <div class="form-group">
                        <label class="control-label col-md-3 col-sm-3 col-xs-12">Barang</label>
                        <div class="col-md-6 col-sm-6 col-xs-12">
                          <select class="form-control" name="barang_id" onchange="getDetailBarang(this.value)">
                            <option value=""> -- Select Barang -- </option>
                            @foreach ($barang as $key)
                              <option value="{{$key->id}}">{{$key->nama_barang}}</option>
                            @endforeach
                            {{-- @foreach ($kategori as $key)
                              <option value="{{ $key->id }}">{{ $key->nama_kategori }}</option>
                            @endforeach --}}
                          </select>
                        </div>
                      </div>
                      <div class="form-group">
                        <label class="control-label col-md-3 col-sm-3 col-xs-12" for="first-name">Jumlah Jual</label>
                        <div class="col-md-6 col-sm-6 col-xs-12">
                          <input type="number" id="jml_jual" name="jml_jual" class="form-control col-md-7 col-xs-12" min="1">
                        </div>
                      </div>
                      <div class="form-group">
                        <label class="control-label col-md-3 col-sm-3 col-xs-12" for="first-name">Total Jual</label>
                        <div class="col-md-6 col-sm-6 col-xs-12">
                          <input type="number" id="total_jual" name="total_jual" class="form-control col-md-7 col-xs-12" readonly disabled>
                        </div>
                      </div>
                    </div>

                    <div class="col-md-6">
                      <h2 class="StepTitle text-center">STOK BARANG</h2>

                      <div class="form-group">
                        <label class="control-label col-md-3 col-sm-3 col-xs-12" for="first-name">Nama Barang </label>
                        <div class="col-md-6 col-sm-6 col-xs-12">
                          <input type="text" id="nama_barang" name="nama_barang" class="form-control col-md-7 col-xs-12" readonly disabled>
                        </div>
                      </div>
                      <div class="form-group">
                        <label class="control-label col-md-3 col-sm-3 col-xs-12" for="first-name">Harga</label>
                        <div class="col-md-6 col-sm-6 col-xs-12">
                          <input type="text" id="harga_jual" name="harga_jual" class="form-control col-md-7 col-xs-12" readonly disabled>
                        </div>
                      </div>
                      <div class="form-group">
                        <label class="control-label col-md-3 col-sm-3 col-xs-12" for="first-name">Stok</label>
                        <div class="col-md-6 col-sm-6 col-xs-12">
                          <input type="text" id="stok" name="stok" class="form-control col-md-7 col-xs-12" readonly disabled>
                        </div>
                      </div>

                    </div>
                    <div class="clearfix"></div>
                    <div class="form-group text-center">
                      <div class="col-md-12 col-sm-12 col-xs-12">
                        <button type="submit" class="btn btn-success">Add To Cart</button>
                      </div>
                    </div>

                  </div>
                  <div id="step-3" class="content" style="display: block;">
                    {{-- <h2 class="StepTitle">Cart</h2> --}}
                    <h2>Detail Penjualan &nbsp;<i class="fa fa-angle-right fa-lg"></i>&nbsp; <span class="kepada"></span></h2>
                  </div>
                  <div id="step-4" class="content" style="display: none;">
                    <h2 class="StepTitle">Step 4 Content</h2>
                    <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat.
                      Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum.
                    </p>
                    <p>
                      Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor
                      in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum.
                    </p>
                    <p>
                      Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor
                      in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum.
                    </p>
                  </div>
                </div>
              </form>
            </div>

            {{-- detail faktur --}}
            <div class="detailFaktur" style="display:none;">
              <div class="x_title">


                <div class="clearfix"></div>
              </div>
            </div>

          </div>
        </div>
      </div>
    </div>



@endsection

@section('script')
  <!-- jQuery Smart Wizard -->
  <script src="{{ asset('admin/vendors/jQuery-Smart-Wizard/js/jquery.smartWizard.js') }}"></script>

  <script type="text/javascript">
    // $.ajaxSetup({
    //   headers: {
    //     'X-CSRF-TOKEN' : $('meta[name="csrf-token"]').attr('content');
    //   }
    // });

    //validasi jumlah jual only number
    $('#jml_jual').on('change keyup', function() {
      var sanitized = $(this).val().replace(/[^0-9]/g, '');
      $(this).val(sanitized);
      $("#total_jual").val(Number($(this).val()) * Number($("#harga_jual").val()));
    });

    //default min penjualan = 1
    function defaultVal(){
        $("#jml_jual").val(1);
        $("#total_jual").val(Number($("#jml_jual").val()) * Number($("#harga_jual").val()));
    }

    function setPelanggan(value){
      var nama_pelanggan = $("[name=pelanggan_id] option:selected").html();

      var show = $(".kepada");
      show.html("Kepada : "+nama_pelanggan);
    }

    function getDetailBarang(value){
      // console.log(value);
      $.ajax({
        type : 'POST',
        data : {barang_id:value},
        url : "{{route('getDetailBarang')}}",
        success : function(result){
          $("#nama_barang").val(result.data.nama_barang);
          $("#stok").val(result.data.stok);
          $("#harga_jual").val(result.data.harga_jual);
          defaultVal();
        }
      });
    }
  </script>
@endsection
