@extends('layouts.admin.app')

@section('title', 'UMART | Data Kategori')

@section('style')
  <!-- Datatables -->
  <link href="{{ asset('admin/vendors/datatables.net-bs/css/dataTables.bootstrap.min.css') }}" rel="stylesheet">
@endsection

@section('sidebar-left')
  @php
    $activePage = [
            'submenu' => 'y',
            'subname' => 'data_master',
            'name' => 'data_kategori',
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
            <h2>MASTER DATA &nbsp;<i class="fa fa-angle-right fa-lg"></i>&nbsp; DATA KATEGORI</h2> <a href="{{ route('data_kategori.create') }}" class="btn btn-sm btn-success pull-right"><i class="fa fa-plus"></i> ADD KATEGORI</a>

            <div class="clearfix"></div>
          </div>
          <div class="x_content">
            <table id="datatable-fixed-header" class="table table-striped table-bordered">
              <thead>
                <tr>
                  <th>No.</th>
                  <th>Nama Kategori</th>
                  <th>Keterangan</th>
                  <th class="text-center">Action</th>
                </tr>
              </thead>
              <tbody>
                @foreach ($kategori as $key)
                  <tr>
                    <td>{{$loop->index + 1}}</td>
                    <td>{{$key->nama_kategori}}</td>
                    <td>{{$key->description}}</td>
                    <td class="text-center">
                      <a href="{{ route('data_kategori.edit', $key->id) }}" style="color:orange;"><span class="fa fa-edit fa-lg"></span></a>
                      &nbsp;
                      <form id="delete-form-{{$key->id}}" action="{{ route('data_kategori.destroy', $key->id) }}" method="post" style="display: none">
                        {{ csrf_field() }}
                        {{ method_field('DELETE')}}
                      </form>
                      <a href="#"
                        onclick="
                        if(confirm('Hapus Data {{$key->nama_kategori}} ?')){
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
@endsection
