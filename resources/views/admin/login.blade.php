<!DOCTYPE html>
<html lang="en">
  <head>
    <meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
    <!-- Meta, title, CSS, favicons, etc. -->
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="shortcut icon" href="{{ asset('image/u-logo.jpg') }}">

    <title>UMART | SIGN IN</title>

    <!-- Bootstrap -->
    <link href="{{ url('admin/vendors/bootstrap/dist/css/bootstrap.min.css') }}" rel="stylesheet">
    <!-- Font Awesome -->
    <link href="{{ url('admin/vendors/font-awesome/css/font-awesome.min.css') }}" rel="stylesheet">
    <!-- NProgress -->
    <link href="{{ url('admin/vendors/nprogress/nprogress.css') }}" rel="stylesheet">
    <!-- Animate.css -->
    <link href="{{ url('admin/vendors/animate.css/animate.min.css') }}" rel="stylesheet">

    <!-- Custom Theme Style -->
    <link href="{{ url('admin/build/css/custom.min.css') }}" rel="stylesheet">
  </head>

  <body class="login">
    <div>
      <a class="hiddenanchor" id="signup"></a>
      <a class="hiddenanchor" id="signin"></a>

      <div class="login_wrapper">
        <div class="animate form login_form">
          <section class="login_content">
            <form method="POST" action="{{ route('admin.login.submit') }}">
              {{ csrf_field() }}
              <h1>U M A R T</h1>
              <div>
                <input id="email" type="text" class="form-control" type="email" placeholder="Email" name="email" value="{{ old('email') }}" required autofocus/>

                @if ($errors->has('email'))
                    <span class="help-block">
                        <strong>{{ $errors->first('email') }}</strong>
                    </span>
                @endif
              </div>
              <div>
                <input id="password" type="password" class="form-control" name="password" placeholder="Password" required>

                @if ($errors->has('password'))
                    <span class="help-block">
                        <strong>{{ $errors->first('password') }}</strong>
                    </span>
                @endif
              </div>
              <div>
                {{-- <a class="btn btn-default submit" href="index.html">Log in</a> --}}
                <input type="submit" class="btn btn-primary submit" name="login" value="Sign In">
                <a class="reset_pass" href="{{ route('admin.password.request') }}">Lost your password?</a>
              </div>

              <div class="clearfix"></div>

              <div class="separator">
                {{-- <p class="change_link">New to site?
                  <a href="#signup" class="to_register"> Create Account </a>
                </p> --}}

                <div class="clearfix"></div>
                <br />

                <div>
                  <img style="width:20%" src="{{ asset('images/LOGO UMART.png') }}" alt=""/><br>
                  <small>V. 2.0</small>
                  <p>© <?php echo date("Y") ?> All Rights Reserved. <br>Incu Bu Muchtar</p>
                </div>
              </div>
            </form>
          </section>
        </div>
      </div>
    </div>
  </body>
</html>
