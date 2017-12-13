@extends('layouts.admin.app')

@section('title', 'UMART | Edit Member')

@section('style')
  <link href="{{ asset('admin/plugins/select2/dist/css/select2.min.css') }}" rel="stylesheet">
  <!-- bootstrap-datetimepicker -->
  <link href="{{ asset('admin/vendors/bootstrap-datetimepicker/build/css/bootstrap-datetimepicker.css') }}" rel="stylesheet">
  <!-- iCheck -->
  <link href="{{ asset('admin/vendors/iCheck/skins/flat/green.css') }}" rel="stylesheet">
  <style media="screen">
    input[type=radio] {
      background-color: #FFF !important;
    }
  </style>
@endsection

@section('sidebar-left')
  @php
    $activePage = [
            'submenu' => 'y',
            'subname' => 'data_master',
            'name' => 'santri',
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
            <h2><a href="{{ route('santri.index') }}">DATA MEMBER</a> &nbsp;<i class="fa fa-angle-right fa-lg"></i>&nbsp; EDIT MEMBER</h2>

            <div class="clearfix"></div>
          </div>
          <div class="x_content">
            <form id="frmAddMember" class="form-horizontal form-label-left" method="post" action="{{ route('santri.update', $edit_member->id) }}">
              {{ csrf_field() }}
              {{ method_field('PATCH') }}
              {{-- <div class="col-md-12">
                @if (count($errors) > 0)
                      <div class="alert alert-danger alert-dismissible fade in" role="alert">
                        <button type="button" class="close" data-dismiss="alert" aria-label="Close"><span aria-hidden="true">×</span></button>
                        <ul>
                          @foreach ($errors->all() as $error)
                          <li>{{ $error }}</li>
                          @endforeach
                        </ul>
                      </div>
                @endif
              </div> --}}
              {{-- this if for save or update --}}
              {{-- <input type="hidden" id="user_id" name="user_id" value="{{ $edit_member->id }}"> --}}
              <div class="form-group">
                <label class="control-label col-md-3 col-sm-3 col-xs-12" for="first-name">No KTP </label>
                <div class="col-md-6 col-sm-6 col-xs-12">
                  <input type="text" id="c_noidentitas" name="ktp" class="form-control col-md-7 col-xs-12" value="{{ $edit_member->ktp }}">
                  <br>
                  @if ($errors->first('ktp'))
                    <small><i style="color:red">* {{ $errors->first('ktp') }}</i></small>
                  @endif
                </div>
              </div>
              <div class="form-group">
                <label class="control-label col-md-3 col-sm-3 col-xs-12">Gelombang</label>
                <div class="col-md-6 col-sm-6 col-xs-12">
                  <select class="form-control select2" name="gelombang" id="gelombang">
                    <option value="1" {{ $edit_member->gelombang == '1' ? 'selected="selected"' : '' }}> 1 </option>
                    <option value="2" {{ $edit_member->gelombang == '2' ? 'selected="selected"' : '' }}> 2 </option>
                    <option value="3" {{ $edit_member->gelombang == '3' ? 'selected="selected"' : '' }}> 3 </option>
                    <option value="4" {{ $edit_member->gelombang == '4' ? 'selected="selected"' : '' }}> 4 </option>
                    <option value="5" {{ $edit_member->gelombang == '5' ? 'selected="selected"' : '' }}> 5 </option>
                  </select>
                  <br>
                  @if ($errors->first('gelombang'))
                    <small><i style="color:red">* {{ $errors->first('gelombang') }}</i></small>
                  @endif
                </div>
              </div>
              <div class="form-group">
                <label class="control-label col-md-3 col-sm-3 col-xs-12" for="first-name">Nama Anggota </label>
                <div class="col-md-6 col-sm-6 col-xs-12">
                  <input type="text" id="n_anggota" name="nama_anggota" class="form-control col-md-7 col-xs-12" value="{{ $edit_member->nama_anggota }}">
                  <br>
                  @if ($errors->first('nama_anggota'))
                    <small><i style="color:red">* {{ $errors->first('nama_anggota') }}</i></small>
                  @endif
                </div>
              </div>
              <div class="form-group">
                <label class="control-label col-md-3 col-sm-3 col-xs-12">Provinsi</label>
                <div class="col-md-6 col-sm-6 col-xs-12">
                  <select class="form-control select2" name="propinsi" id="propid" onchange="getKabupaten(this.value)">
                    {{-- @if ($edit_member->propinsi)
                      <option value="{{ $edit_member->propinsi }}" selected="selected">{{ $edit_member->propinsi }}</option>
                    @endif --}}
                  </select>
                  <br>
                  @if ($errors->first('propinsi'))
                    <small><i style="color:red">* {{ $errors->first('propinsi') }}</i></small>
                  @endif
                </div>
                <div class="col-md-1 col-sm-12 col-xs-12" id="loadingProp" style="display:none">
                  <i class="fa fa-spinner fa-pulse fa-2x fa-fw"></i>
                  <span class="sr-only">Loading...</span>
                </div>
              </div>
              <div class="form-group">
                <label class="control-label col-md-3 col-sm-3 col-xs-12">Kota / Kabupaten</label>
                <div class="col-md-6 col-sm-6 col-xs-12">
                  <select class="form-control select2" name="kabupaten" id="kabid" onchange="getKecamatan(this.value)">
                    @if ($getKab)
                      <option value="{{ $getKab->id_kab }}" selected="selected"> {{ $getKab->nama }} </option>
                    @else
                      <option value=""> -- Select Kabupaten -- </option>
                    @endif
                  </select>
                  <br>
                  @if ($errors->first('kabupaten'))
                    <small><i style="color:red">* {{ $errors->first('kabupaten') }}</i></small>
                  @endif
                </div>
                <div class="col-md-1 col-sm-12 col-xs-12" id="loadingKab" style="display:none">
                  <i class="fa fa-spinner fa-pulse fa-2x fa-fw"></i>
                  <span class="sr-only">Loading...</span>
                </div>
              </div>
              <div class="form-group">
                <label class="control-label col-md-3 col-sm-3 col-xs-12">Kecamatan</label>
                <div class="col-md-6 col-sm-6 col-xs-12">
                  <select class="form-control select2" name="kecamatan" id="kecamatan_id" onchange="getKelurahan(this.value)">
                    @if ($getKec)
                      <option value="{{ $getKec->id_kec }}" selected="selected"> {{ $getKec->nama }} </option>
                    @else
                      <option value=""> -- Select Kecamatan -- </option>
                    @endif
                  </select>
                  <br>
                  @if ($errors->first('kecamatan'))
                    <small><i style="color:red">* {{ $errors->first('kecamatan') }}</i></small>
                  @endif
                </div>
                <div class="col-md-1 col-sm-12 col-xs-12" id="loadingKec" style="display:none">
                  <i class="fa fa-spinner fa-pulse fa-2x fa-fw"></i>
                  <span class="sr-only">Loading...</span>
                </div>
              </div>
              <div class="form-group">
                <label class="control-label col-md-3 col-sm-3 col-xs-12">Kelurahan</label>
                <div class="col-md-6 col-sm-6 col-xs-12">
                  <select class="form-control select2" name="kelurahan" id="kelurahan_id">
                    @if ($getKel)
                      <option value="{{ $getKel->id_kel }}" selected="selected"> {{ $getKel->nama }} </option>
                    @else
                      <option value=""> -- Select Kelurahan -- </option>
                    @endif
                  </select>
                  <br>
                  @if ($errors->first('kelurahan'))
                    <small><i style="color:red">* {{ $errors->first('kelurahan') }}</i></small>
                  @endif
                </div>
                <div class="col-md-1 col-sm-12 col-xs-12" id="loadingKel" style="display:none">
                  <i class="fa fa-spinner fa-pulse fa-2x fa-fw"></i>
                  <span class="sr-only">Loading...</span>
                </div>
              </div>
              <div class="form-group">
                  <label class="control-label col-md-3 col-sm-3 col-xs-12">Alamat</label>
                  <div class='col-md-6 col-sm-6 col-xs-12'>
                    <textarea id="alamat" class="form-control" name="alamat">{{ $edit_member->alamat }}</textarea>
                    <br>
                    @if ($errors->first('alamat'))
                      <small><i style="color:red">* {{ $errors->first('alamat') }}</i></small>
                    @endif
                  </div>
              </div>
              <div class="form-group">
                  <label class="control-label col-md-3 col-sm-3 col-xs-12">Tanggal Lahir</label>
                  <div class='col-md-6 col-sm-6 col-xs-12'>
                    <div class="input-group date" id='tglLahir'>
                      <input type='text' class="form-control" placeholder="YYYY-MM-DD" name="tanggal_lahir" value="{{ $edit_member->tanggal_lahir }}"/>
                      <span class="input-group-addon">
                         <span class="glyphicon glyphicon-calendar"></span>
                      </span>
                    </div>
                    @if ($errors->first('tanggal_lahir'))
                      <small><i style="color:red">* {{ $errors->first('tanggal_lahir') }}</i></small>
                    @endif
                  </div>
              </div>
              <div class="form-group">
                <label class="control-label col-md-3 col-sm-3 col-xs-12">Jenis Kelamin</label>
                <div class="col-md-6 col-sm-6 col-xs-12">
                  <p>
                    Pria <input type="radio" class="flat" name="jenis_kelamin" id="genderP" value="P" {{ $edit_member->jenis_kelamin == 'P' ? 'checked=""' : '' }}/> &nbsp;
                    Wanita <input type="radio" class="flat" name="jenis_kelamin" id="genderW" value="W" {{ $edit_member->jenis_kelamin == 'W' ? 'checked=""' : '' }}/>
                  </p>
                </div>
              </div>
              <div class="form-group">
                <label class="control-label col-md-3 col-sm-3 col-xs-12">Gol. Darah</label>
                <div class="col-md-6 col-sm-6 col-xs-12">
                  <p>
                    A <input type="radio" class="flat" name="golongan_darah" id="golA" value="A" {{ $edit_member->goldarah == 'A' ? 'checked=""' : '' }} /> &nbsp;
                    O <input type="radio" class="flat" name="golongan_darah" id="GolO" value="O" {{ $edit_member->goldarah == 'O' ? 'checked=""' : '' }}/>
                    B <input type="radio" class="flat" name="golongan_darah" id="golB" value="B" {{ $edit_member->goldarah == 'B' ? 'checked=""' : '' }}/>
                    AB <input type="radio" class="flat" name="golongan_darah" id="golAB" value="AB" {{ $edit_member->goldarah == 'AB' ? 'checked=""' : '' }}/>
                  </p>
                </div>
              </div>
              <div class="form-group">
                <label class="control-label col-md-3 col-sm-3 col-xs-12">Status</label>
                <div class="col-md-6 col-sm-6 col-xs-12">
                  <select class="form-control select2" name="status" id="status">
                    <option value="kawin" {{ $edit_member->status == 'kawin' ? 'selected="selected"' : '' }}>Kawin</option>
                    <option value="belum_kawin" {{ $edit_member->status == 'belum_kawin' ? 'selected="selected"' : '' }}>Belum Kawin</option>
                    <option value="cerai" {{ $edit_member->status == 'cerai' ? 'selected="selected"' : '' }}>Cerai</option>
                  </select>
                </div>
              </div>
              <div class="form-group">
                <label class="control-label col-md-3 col-sm-3 col-xs-12">Agama</label>
                <div class="col-md-6 col-sm-6 col-xs-12">
                  <select class="form-control select2" name="agama" id="agama">
                    <option value="islam" {{ $edit_member->agama == 'islam' ? 'selected="selected"' : '' }}>Islam</option>
                    <option value="katholik" {{ $edit_member->agama == 'katholik' ? 'selected="selected"' : '' }}>Katholik</option>
                    <option value="protestan" {{ $edit_member->agama == 'protestan' ? 'selected="selected"' : '' }}>Protestan</option>
                    <option value="hindu" {{ $edit_member->agama == 'hindu' ? 'selected="selected"' : '' }}>Hindu</option>
                    <option value="budha" {{ $edit_member->agama == 'budha' ? 'selected="selected"' : '' }}>Budha</option>
                  </select>
                </div>
              </div>
              <div class="form-group">
                <label class="control-label col-md-3 col-sm-3 col-xs-12" for="first-name">Pekerjaan </label>
                <div class="col-md-6 col-sm-6 col-xs-12">
                  <input type="text" id="pekerjaan" name="pekerjaan" class="form-control col-md-7 col-xs-12" value="{{ $edit_member->pekerjaan }}">
                  <br>
                  @if ($errors->first('pekerjaan'))
                    <small><i style="color:red">* {{ $errors->first('pekerjaan') }}</i></small>
                  @endif
                </div>
              </div>
              <div class="form-group">
                  <label class="control-label col-md-3 col-sm-3 col-xs-12">RT/RW</label>
                  <div class='col-md-2 col-sm-12 col-xs-12'>
                    <input type='text' class="form-control" placeholder="RT/RW" name="rtrw" value="{{ $edit_member->rtrw }}"/>
                    <br>
                    @if ($errors->first('rtrw'))
                      <small><i style="color:red">* {{ $errors->first('rtrw') }}</i></small>
                    @endif
                  </div>
              </div>
              <div class="form-group">
                  <label class="control-label col-md-3 col-sm-3 col-xs-12">Mobile</label>
                  <div class='col-md-2 col-sm-12 col-xs-12'>
                    <div class="input-group">
                      <input type='text' class="form-control" placeholder="083892xxxx" name="mobile" id="mobile" value="{{ $edit_member->nohp }}"/>
                      <span class="input-group-addon">
                         <span class="fa fa-mobile"></span>
                      </span>
                    </div>
                    @if ($errors->first('mobile'))
                      <small><i style="color:red">* {{ $errors->first('mobile') }}</i></small>
                    @endif
                  </div>
              </div>
              <div class="form-group">
                <label class="control-label col-md-3 col-sm-3 col-xs-12">Email</label>
                <div class='col-md-2 col-sm-12 col-xs-12'>
                  <div class="input-group" id='email'>
                    <input type='email' class="form-control" placeholder="Example@mail.com" name="email" value="{{ $edit_member->email }}"/>
                    <span class="input-group-addon">
                       {{-- <span class="fa fa-envelope"></span> --}}@
                    </span>
                  </div>
                  @if ($errors->first('email'))
                    <small><i style="color:red">* {{ $errors->first('email') }}</i></small>
                  @endif
                </div>
              </div>
              <div class="form-group">
                <label class="control-label col-md-3 col-sm-3 col-xs-12">Username</label>
                <div class='col-md-2 col-sm-12 col-xs-12'>
                  <div class="input-group" id='username'>
                    <input type='text' class="form-control" placeholder="user_name" name="username" value="{{ $edit_member->username }}"/>
                    <span class="input-group-addon">
                       <span class="fa fa-user"></span>
                    </span>
                  </div>
                  @if ($errors->first('username'))
                    <small><i style="color:red">* {{ $errors->first('username') }}</i></small>
                  @endif
                </div>
              </div>
              <div class="form-group">
                <label class="control-label col-md-3 col-sm-3 col-xs-12">Password</label>
                <div class='col-md-2 col-sm-12 col-xs-12'>
                  <div class="input-group" id='password'>
                    <input type='password' class="form-control" placeholder="Default password" name="password" value="password"/>
                    <span class="input-group-addon">
                       <span class="fa fa-lock"></span>
                    </span>
                  </div>
                  @if ($errors->first('password'))
                    <small><i style="color:red">* {{ $errors->first('password') }}</i></small>
                  @endif
                </div>
              </div>

              <div class="ln_solid"></div>
              <div class="form-group">
                <div class="col-md-9 col-sm-9 col-xs-12 col-md-offset-3">
                  <button class="btn btn-primary" type="button">Cancel</button>
                  <button type="submit" class="btn btn-success">Update Data</button>
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
  <!-- bootstrap-datetimepicker -->
  <script src="{{asset('admin/vendors/moment/min/moment.min.js')}}"></script>
  <script src="{{asset('admin/vendors/bootstrap-datetimepicker/build/js/bootstrap-datetimepicker.min.js')}}"></script>
  <!-- iCheck -->
  <script src="{{asset('admin/vendors/iCheck/icheck.min.js')}}"></script>

  <script type="text/javascript">
      $(function() {
          console.log("ready!");
          getProp();
          $('#tglLahir').datetimepicker({
              format: 'YYYY-MM-DD'
          });

          // random number
          for (var a=[],i=1;i<=400;++i) a[i]=i;

          //get mail
          $("#n_anggota").bind("change keyup",function(){
            var nama = $('#n_anggota').val();
            var defaultEmail = '@'+'email.com';
            var getNumber = shuffle(a);
            var replaceSpace = nama.replace(/ /g,"_");//remove space
            var lowerCase = replaceSpace.toLowerCase();
            $('[name=email]').val(lowerCase+getNumber+defaultEmail);
            $('[name=username]').val(lowerCase+getNumber);
          });

          $('#mobile').keydown(function(){
             var self = $(this);

             var removedText = self.val().replace(/\D/, '');

             self.val(removedText);
          });
      });

      // random number function
      // http://stackoverflow.com/questions/962802#962890
      function shuffle(array) {
        var tmp, current, top = array.length;
        if(top) while(--top) {
          current = Math.floor(Math.random() * (top + 1));
          tmp = array[current];
          array[current] = array[top];
          array[top] = tmp;
        }
        return array[0];
      }

      $('.select2').select2();

      // $.ajaxSetup({
      //   headers: {
      //     'X-CSRF-TOKEN' : $('meta[name="csrf-token"]').attr('content')
      //   }
      // });

      // function disabled(){
      //   $('#id_saham').disabled();
      // }

      // function getEmail(){
      //   var nama = $('#n_anggota').val();
      //   var defaultEmail = '@'+'email.com';
      //   $('#email').val(nama+defaultEmail);
      //   console.log(nama);
      // }

      $('#n_anggota').on('change', function(){
        $('#id').val($(this).val());
        var user_id = $(this).val();
      });

      function getProp(){
        $("#loadingProp").show();
        @if (!$getProp)
          $('#kabid').html('');
          $('#kabid').append('<option value=""> -- Select Kabupaten -- </option>');
          $("#kabid").prop('disabled', true);
          $('#kecamatan_id').html('');
          $('#kecamatan_id').append('<option value=""> -- Select Kecamatan -- </option>');
          $("#kecamatan_id").prop('disabled', true);
          $('#kelurahan_id').html('');
          $('#kelurahan_id').append('<option value=""> -- Select Kelurahan -- </option>');
          $("#kelurahan_id").prop('disabled', true);
        @endif
        $.ajax({
          type : 'POST',
          // data : {propid : propid},
          url : "{{ route('getPropinsi') }}", // route di api
          success : function(result){
            @if ($getProp)
              $('#propid').append('<option value="{{ $getProp->id_prov }}" selected="selected"> {{ $getProp->nama }} </option>');
            @else
              $('#propid').append('<option value=""> -- Select Provinsi -- </option>');
            @endif
            $.each(result.data, function(key, val){
              $('#propid').append('<option value="'+val.id_prov+'">'+val.nama+'</option>');
            });
            $("#loadingProp").hide();
          }
        });
      }

      function getKabupaten(propid){
        $("#kabid").prop('disabled', false);
        $("#kecamatan_id").prop('disabled', true);
        $("#kelurahan_id").prop('disabled', true);
        $("#loadingKab").show();
        $('#kabid').html('');
        $('#kecamatan_id').html('');
        $('#kelurahan_id').html('');
        $.ajax({
          type : 'POST',
          data : {propid : propid},
          url : "{{ route('getKabupaten') }}", // route di api
          success : function(result){
            $('#kabid').append('<option value=""> -- Select Kabupaten -- </option>');
            $('#kecamatan_id').append('<option value=""> -- Select Kecamatan -- </option>');
            $('#kelurahan_id').append('<option value=""> -- Select Kelurahan -- </option>');
            $.each(result.data, function(key, val){
              $('#kabid').append('<option value="'+val.id_kab+'">'+val.nama+'</option>');
            });
            $("#loadingKab").hide();
          }
        });
      }

      function getKecamatan(kabid){
        $("#loadingKec").show();
        $('#kecamatan_id').html('');
        $.ajax({
          type : 'POST',
          data : {kabid : kabid},
          url : "{{ route('getKecamatan') }}", // route di api
          success : function(result){
              $('#kecamatan_id').append('<option value=""> -- Select Kecamatan -- </option>');
              $('#kelurahan_id').append('<option value=""> -- Select Kelurahan -- </option>');
            $.each(result.data, function(key, val){
              $('#kecamatan_id').append('<option value="'+val.id_kec+'">'+val.nama+'</option>');
            });
            $("#loadingKec").hide();
            $("#kecamatan_id").prop('disabled', false);
          }
        });
      }

      function getKelurahan(kecid){
        $("#loadingKel").show();
        $('#kelurahan_id').html('');
        $.ajax({
          type : 'POST',
          data : {kecid : kecid},
          url : "{{ route('getKelurahan') }}", // route di api
          success : function(result){
              $('#kelurahan_id').append('<option value=""> -- Select Kelurahan -- </option>');
            $.each(result.data, function(key, val){
              $('#kelurahan_id').append('<option value="'+val.id_kel+'">'+val.nama+'</option>');
            });
            $("#loadingKel").hide();
            $("#kelurahan_id").prop('disabled', false);
          }
        });
      }
  </script>
@endsection
