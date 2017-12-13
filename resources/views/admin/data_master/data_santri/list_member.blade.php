@extends('layouts.admin.app')

@section('title', 'IBNU HAJAR | Data Santri')

@section('style')
  <!-- Datatables -->
  <link href="{{ asset('admin/vendors/datatables.net-bs/css/dataTables.bootstrap.min.css') }}" rel="stylesheet">
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
    {{-- get status edit/add/delete --}}
    @if (session('status'))
      <div class="row">
        <div class="col-md-12 col-sm-12 col-xs-12">
          <div class="alert {{ session('status') != 'Some Thing Wrong!' ? "alert-success" : "alert-danger" }} alert-dismissible fade in" role="alert">
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
            <h2>DATA MASTER &nbsp;<i class="fa fa-angle-right fa-lg"></i>&nbsp; DATA KESANTRIAN</h2>
              {{-- <a href="{{ route('add.saham') }}" class="btn btn-sm btn-success pull-right"><i class="fa fa-plus"></i> SAHAM</a> --}}
              <a href="{{ route('santri.create') }}" class="btn btn-sm btn-success pull-right"><i class="fa fa-plus"></i> SANTRI</a>

            <div class="clearfix"></div>
          </div>
          <div class="x_content">
            <table id="datatable-fixed-header" class="table table-striped table-bordered">
              <thead>
                <tr>
                  <th>No Induk Santri</th>
                  <th>QR CODE</th>
                  <th>Nama</th>
                  <th>No Hp</th>
                  <th>Alamat</th>
                  <th class="text-center">Action</th>
                </tr>
              </thead>
              <tbody>
                @foreach ($member as $key)
                  <tr>
                    <td>{{$key->n_noidentitas}}</td>
                    <td align="center">
                      <form class="" action="{{ route('getQRCODE')  }}" method="post" target="_blank">
                        {{-- <a href="#" target="_blank">Show QR</a> --}}
                        {{ csrf_field() }}
                        <input type="hidden" name="n_noidentitas" value="{{ $key->n_noidentitas }}">
                        <input class="btn btn-sm btn-success" type="submit" name="" value="Show QR">
                      </form>

                      {{-- <div class="text-center"> --}}
                          {{-- this is QR For User ID <br> --}}
                          {{-- {!! QrCode::size(100)->generate('{{ $generateQR }}'); !!} --}}
                      {{-- </div> --}}
                    </td>
                    <td>{{$key->nama_anggota}}</td>
                    <td>{{$key->nohp}}</td>
                    <td>{{$key->alamat}}</td>
                    {{-- <td>{{$key->email}}</td> --}}
                    {{-- modal --}}
                    <div class="modal fade bs-example-modal-lg openModal-{{$key->id}}" tabindex="-1" role="dialog" aria-hidden="true">
                      <div class="modal-dialog modal-lg">
                        <div class="modal-content">

                          <div class="modal-header">
                            <button type="button" class="close" data-dismiss="modal"><span aria-hidden="true">×</span>
                            </button>
                            <h4 class="modal-title" id="myModalLabel">Quick View, {{$key->nama_anggota}}</h4>
                          </div>
                          <div class="modal-body">
                            <h4>{{$key->nama_anggota}}</h4>
                            <center><img src="https://res.cloudinary.com/tia-img/image/fetch/t_profile_avatar/https%3A%2F%2Fstatic.techinasia.com%2Fassets%2Fimages%2Fprofile%2Ficon-defaultprofile.png" name="aboutme" width="140" height="140" class="img-circle"></center>
                            <ul class="to_do">
                              <li>
                                <p>{{$key->n_noidentitas}}</p>
                              </li>
                              <li>
                                <p>{{$key->nama_anggota}}</p>
                              </li>
                              <li>
                                <p>{{$key->nohp}}</p>
                              </li>
                              <li>
                                <p>{{$key->alamat}}</p>
                              </li>
                              <li>
                                <p>{{$key->email}}</p>
                              </li>
                              <li>
                                <p>{{$key->username}}</p>
                              </li>
                            </ul>
                          </div>
                          <div class="modal-footer">
                            <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
                            <a href="{{ route('santri.edit', $key->id) }}" class="btn btn-warning"><i class="fa fa-edit"></i>&nbsp;Edit</a>
                          </div>

                        </div>
                      </div>
                    </div>
                    <td class="text-center">
                      <a href="#" style="color:#2196f3;" data-toggle="modal" data-target=".openModal-{{$key->id}}"><span class="fa fa-folder-open-o fa-lg" data-toggle="tooltip" data-placement="top" title="" data-original-title="Quick View"></span></a>
                      <a href="{{ route('santri.edit', $key->id) }}" style="color:#ff9800;" data-toggle="tooltip" data-placement="top" title="" data-original-title="Edit '{{$key->nama_anggota}}'"><span class="fa fa-edit fa-lg"></span></a>
                      <form id="delete-form-{{$key->id}}" action="{{ route('santri.destroy', $key->id) }}" method="post" style="display: none">
                        {{ csrf_field() }}
                        {{ method_field('DELETE')}}
                      </form>
                      <a href="#"
                        onclick="
                        if(confirm('Hapus {{$key->nama_anggota}} ?')){
                          event.preventDefault();
                          document.getElementById('delete-form-{{$key->id}}').submit();
                        }else{
                          event.preventDefault();
                        }
                        " style="color:#f44336;" data-toggle="tooltip" data-placement="left" title="" data-original-title="Delete '{{$key->nama_anggota}}'">
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
@endsection
