@extends('layouts.admin.app')

@section('title', 'UMART | Add Saham')

@section('style')
  <link href="{{ asset('admin/plugins/select2/dist/css/select2.min.css') }}" rel="stylesheet">
@endsection

@section('sidebar-left')
  @php
    $activePage = [
            'submenu' => 'n',
            'subname' => '-',
            'name' => 'member_umart',
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
            <h2><a href="{{ route('member_umart.index') }}">DATA MEMBER</a> &nbsp;<i class="fa fa-angle-right fa-lg"></i>&nbsp; ADD SAHAM</h2>

            <div class="clearfix"></div>
          </div>
          <div class="x_content">
            <form id="frmAddSaham" class="form-horizontal form-label-left" method="post" action="{{ route('store.saham') }}">
              {{ csrf_field() }}
              <div class="col-md-12">
                @if (count($errors) > 0)
                  <div class="alert alert-danger alert-dismissible fade in" role="alert">
                    <button type="button" class="close" data-dismiss="alert" aria-label="Close"><span aria-hidden="true">×</span>
                    </button>
                    <ul>
                      @foreach ($errors->all() as $error)
                      <li>{{ $error }}</li>
                      @endforeach
                    </ul>
                  </div>
                @endif
              </div>
              {{-- this if for save or update --}}
              <input type="hidden" id="id_saham" name="id_saham" value="">
              <div class="form-group">
                <label class="control-label col-md-3 col-sm-3 col-xs-12">Nama Member</label>
                <div class="col-md-6 col-sm-6 col-xs-12">
                  <select class="form-control select2" name="id" id="n_anggota" onchange="getDetailSaham()">
                    <option value=""> -- Select Member -- </option>
                    @foreach ($member as $key)
                      <option value="{{ $key->n_noidentitas }}">{{ $key->nama_anggota }}</option>
                    @endforeach
                  </select>
                </div>
              </div>
              <div class="form-group">
                <label class="control-label col-md-3 col-sm-3 col-xs-12" for="first-name">No Saham </label>
                <div class="col-md-6 col-sm-6 col-xs-12">
                  <input type="text" id="id" name="id" class="form-control col-md-7 col-xs-12" value="{{ old('id') }}" readonly disabled>
                </div>
              </div>
              <div class="form-group">
                <label class="control-label col-md-3 col-sm-3 col-xs-12" for="first-name">Jumlah Saham </label>
                <div class="col-md-1 col-sm-12 col-xs-12">
                  <input type="text" id="jml_saham1" name="jml_saham1" class="form-control col-md-7 col-xs-12" value="{{ old('jml_saham1') }}" placeholder="Saham 1">
                </div>
                <div class="col-md-1 col-sm-12 col-xs-12">
                  <input type="text" id="jml_saham2" name="jml_saham2" class="form-control col-md-7 col-xs-12" value="{{ old('jml_saham2') }}" placeholder="Saham 2">
                </div>
                <div class="col-md-1 col-sm-12 col-xs-12">
                  <input type="text" id="jml_saham3" name="jml_saham3" class="form-control col-md-7 col-xs-12" value="{{ old('jml_saham3') }}" placeholder="Saham 3">
                </div>
                <div class="col-md-1 col-sm-12 col-xs-12">
                  <input type="text" id="jml_saham4" name="jml_saham4" class="form-control col-md-7 col-xs-12" value="{{ old('jml_saham4') }}" placeholder="Saham 4">
                </div>
                <div class="col-md-1 col-sm-12 col-xs-12">
                  <input type="text" id="jml_saham5" name="jml_saham5" class="form-control col-md-7 col-xs-12" value="{{ old('jml_saham5') }}" placeholder="Saham 5">
                </div>
                <div class="col-md-1 col-sm-12 col-xs-12" id="loading" style="display:none">
                  <i class="fa fa-spinner fa-pulse fa-2x fa-fw"></i>
                  <span class="sr-only">Loading...</span>
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
  <script type="text/javascript" src="{{asset('admin/plugins/select2/dist/js/select2.full.min.js')}}"></script>
  <script type="text/javascript">
      $(function() {
          console.log("ready!");
      });

      $('.select2').select2();

      // $.ajaxSetup({
      //   headers: {
      //     'X-CSRF-TOKEN' : $('meta[name="csrf-token"]').attr('content')
      //   }
      // });

      //validasi jumlah saham only number
      for (var i = 0; i <= 5; i++) {
        $('#jml_saham'+i).on('change keyup', function() {
          var sanitized = $(this).val().replace(/[^0-9]/g, '');
          $(this).val(sanitized);
        });
      }

      function clearForm(){
        $('#id_saham').val('');
        $('#jml_saham1').val('');
        $('#jml_saham2').val('');
        $('#jml_saham3').val('');
        $('#jml_saham4').val('');
        $('#jml_saham5').val('');
      }

      $('#n_anggota').on('change', function(){
        $('#id').val($(this).val());
        var user_id = $(this).val();
      });

      function getDetailSaham(){
        $("#loading").show();
        var user_id = $('#id').val();
        $.ajax({
          type : 'POST',
          data : {user_id : user_id},
          url : "{{ route('getDetailSaham') }}", // route di api
          success : function(result){
            $("#loading").hide();
            clearForm();
            $('#id_saham').val(result.data.id);
            $('#jml_saham1').val(result.data.jml_saham1);
            $('#jml_saham2').val(result.data.jml_saham2);
            $('#jml_saham3').val(result.data.jml_saham3);
            $('#jml_saham4').val(result.data.jml_saham4);
            $('#jml_saham5').val(result.data.jml_saham5);
            // console.log(result);
          }
        });
      }
  </script>
@endsection
