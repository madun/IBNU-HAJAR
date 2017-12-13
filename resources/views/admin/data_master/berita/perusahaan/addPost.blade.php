@extends('layouts.admin.app')

@section('title', 'UMART | BERITA PERUSAHAAN')

@section('style')
    <!-- bootstrap wysihtml5 - text editor -->
    <link rel="stylesheet" href="{{ url('admin/plugins/bootstrap-wysihtml5/bootstrap3-wysihtml5.min.css') }}">

    <style media="screen">
      .wysihtml5-sandbox{
        width: 100% !important;
      }
    </style>
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
            <h2>BERITA &nbsp;<i class="fa fa-angle-right fa-lg"></i>&nbsp; <a href="{{ route('berita-perusahaan.index') }}">LIST POST</a> &nbsp;<i class="fa fa-angle-right fa-lg"></i>&nbsp; ADD POST PERUSAHAAN</h2>

            <div class="clearfix"></div>
          </div>
          <div class="x_content">
            <form class="form-horizontal form-label-left" method="post" action="{{ route('berita-perusahaan.store') }}">
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
              <div class="col-md-8">
                {{-- kiri --}}
                <div class="form-group">
                  <label class="control-label col-md-3 col-sm-3 col-xs-12" for="title">Title Post
                  </label>
                  <div class="col-md-6 col-sm-6 col-xs-12">
                    <input type="text" id="title" name="title" class="form-control col-md-7 col-xs-12">
                  </div>
                </div>
                <div class="form-group">
                  <label class="control-label col-md-3 col-sm-3 col-xs-12" for="subtitle">Sub Title
                  </label>
                  <div class="col-md-6 col-sm-6 col-xs-12">
                    <input type="text" id="subtitle" name="subtitle" name="last-name" class="form-control col-md-7 col-xs-12">
                  </div>
                </div>
                <div class="form-group">
                  <label for="slug" class="control-label col-md-3 col-sm-3 col-xs-12">Slug</label>
                  <div class="col-md-6 col-sm-6 col-xs-12">
                    <input id="slug" name="slug" class="form-control col-md-7 col-xs-12" type="text" name="middle-name">
                  </div>
                </div>

                <div class="form-group">
                  {{-- <label class="control-label col-md-3 col-sm-3 col-xs-12">Body</label> --}}
                  <div class="col-md-12 col-sm-12 col-xs-12">
                    <textarea id="body" class="" name="body" rows="30" cols="30">

                    </textarea>
                  </div>
                </div>

              </div>
              <div class="col-md-4">
                {{-- kanan --}}
                <div class="form-group">
                  <label class="col-md-3 col-sm-3 col-xs-12 control-label">Publish
                  </label>

                  <div class="col-md-9 col-sm-9 col-xs-12">
                    <div class="checkbox">
                      <label>
                        <input type="radio" name="status" value="1" checked> Yes &nbsp; | &nbsp;
                        <input type="radio" name="status" value="0"> No
                      </label>
                    </div>
                  </div>
                </div>
                <div class="form-group">
                  <label class="control-label col-md-3 col-sm-3 col-xs-12">Image
                  </label>
                  <div class="col-md-6 col-sm-6 col-xs-12">
                    <input class="date-picker form-control col-md-7 col-xs-12" type="file" name="image">
                  </div>
                  <p class="help-block">Upload Cover!</p>
                </div>

                <img class="img-responsive" src="{{ asset('image/umart-logo.jpg') }}" alt="">

                <div class="ln_solid"></div>
                <div class="form-group">
                  <div class="col-md-9 col-sm-9 col-xs-12 col-md-offset-3">
                    <button class="btn btn-primary" type="reset">RESET</button>
                    <button type="submit" class="btn btn-success">POSTING</button>
                  </div>
                </div>

              </div>

            </form>
          </div>
        </div>
      </div>
    </div>
@endsection

@section('script')
  <!-- Bootstrap WYSIHTML5 -->
  <script src="{{ url('admin/plugins/bootstrap-wysihtml5/bootstrap3-wysihtml5.all.min.js') }}"></script>
  <script>
    $(function () {
      // Replace the <textarea id="editor1"> with a CKEditor
      // instance, using default configuration.
      // CKEDITOR.replace('editor1')
      //bootstrap WYSIHTML5 - text editor
      $('#body').wysihtml5()
    })
  </script>
@endsection
