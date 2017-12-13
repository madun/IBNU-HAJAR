@extends('layouts.admin.app')

@section('title', 'UMART | Data Barang')

@section('style')
  <!-- Datatables -->
  <link href="{{ asset('admin/vendors/datatables.net-bs/css/dataTables.bootstrap.min.css') }}" rel="stylesheet">
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
            <h2>MASTER DATA &nbsp;<i class="fa fa-angle-right fa-lg"></i>&nbsp; DATA BARANG</h2> <a href="{{ route('data_barang.create') }}" class="btn btn-sm btn-success pull-right"><i class="fa fa-plus"></i> ADD BARANG</a>

            <div class="clearfix"></div>
          </div>
          <div class="x_content">
            <table id="datatable-fixed-header" class="table table-striped table-bordered">
              <thead>
                <tr>
                  <th>No.</th>
                  <th>Nama Barang</th>
                  <th>Kategori</th>
                  <th>Sub Kategori</th>
                  <th>Item Kategori</th>
                  <th>Stok</th>
                  <th>Harga Beli</th>
                  <th>Harga Jual</th>
                  <th>Expired</th>
                  <th class="text-center">Action</th>
                </tr>
              </thead>
              <tbody>
                @foreach ($barang as $key)
                  <tr>
                    <td>{{$loop->index + 1}}</td>
                    <td>{{$key->nama_barang}}</td>
                    <td>{{$key->kategori->nama_kategori}}</td>
                    <td>{{$key->subkategori->nama_subkategori}}</td>
                    <td>{{$key->itemkategori->nama_item}}</td>
                    <td>{{$key->stok}}</td>
                    <td class="text-right">{{$key->harga_beli}}</td>
                    <td class="text-right">{{$key->harga_jual}}</td>
                    <td>{{$key->tanggal_expired}}</td>
                    {{-- modal --}}
                    <div class="modal fade bs-example-modal-lg openModal-{{$key->id}}" tabindex="-1" role="dialog" aria-hidden="true">
                      <div class="modal-dialog modal-lg">
                        <div class="modal-content">

                          <div class="modal-header">
                            <button type="button" class="close" data-dismiss="modal"><span aria-hidden="true">×</span>
                            </button>
                            <h4 class="modal-title" id="myModalLabel">Quick View, {{$key->nama_barang}}</h4>
                          </div>
                          <div class="modal-body">
                            <h4>{{$key->nama_barang}}</h4>
                            <p>Praesent commodo cursus magna, vel scelerisque nisl consectetur et. Vivamus sagittis lacus vel augue laoreet rutrum faucibus dolor auctor.</p>
                            <p>Aenean lacinia bibendum nulla sed consectetur. Praesent commodo cursus magna, vel scelerisque nisl consectetur et. Donec sed odio dui. Donec ullamcorper nulla non metus auctor fringilla.</p>
                          </div>
                          <div class="modal-footer">
                            <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
                            <button type="button" class="btn btn-warning"><i class="fa fa-edit"></i>&nbsp;Edit</button>
                          </div>

                        </div>
                      </div>
                    </div>
                    <td class="text-center">
                      <a href="#" style="color:#2196f3;" data-toggle="modal" data-target=".openModal-{{$key->id}}"><span class="fa fa-folder-open-o fa-lg" data-toggle="tooltip" data-placement="top" title="" data-original-title="Quick View"></span></a>
                      <a href="{{ route('data_barang.edit', $key->id) }}" style="color:#ff9800;" data-toggle="tooltip" data-placement="top" title="" data-original-title="Edit '{{$key->nama_barang}}'"><span class="fa fa-edit fa-lg"></span></a>
                      <form id="delete-form-{{$key->id}}" action="{{ route('data_barang.destroy', $key->id) }}" method="post" style="display: none">
                        {{ csrf_field() }}
                        {{ method_field('DELETE')}}
                      </form>
                      <a href="#"
                        onclick="
                        if(confirm('Hapus Data {{$key->nama_barang}} ?')){
                          event.preventDefault();
                          document.getElementById('delete-form-{{$key->id}}').submit();
                        }else{
                          event.preventDefault();
                        }
                        " style="color:#f44336;" data-toggle="tooltip" data-placement="left" title="" data-original-title="Delete '{{$key->nama_barang}}'">
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
