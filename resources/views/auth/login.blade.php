@include('layouts.Admin.header')
<body class="hold-transition login-page">
<div class="login-box">
  <div class="login-logo">
    <a href="#"><b>Work</b>Lab</a>
  </div>
  <!-- /.login-logo -->
  <div class="login-box-body">
    <p class="login-box-msg">Sign in to start your session</p>

    <form action="{{ route('login') }}" method="post">
      {{ csrf_field() }}
      <div class="form-group has-feedback {{ $errors->has('email') ? ' has-error' : '' }}">
        <input type="email" class="form-control" placeholder="Email" name='email'value="{{ old('email') }}">
        @if ($errors->has('email'))
            <span class="help-block">
                <strong>{{ $errors->first('email') }}</strong>
            </span>
        @endif
        <span class="glyphicon glyphicon-envelope form-control-feedback"></span>
      </div>
      <div class="form-group has-feedback {{ $errors->has('password') ? 'has-error' :'' }}">
        <input type="password" class="form-control" placeholder="Password" name="password">
          @if ($errors->has('password'))
            <span class="help-block">
                <strong>{{ $errors->first('password') }}</strong>
            </span>
        @endif
        <span class="glyphicon glyphicon-lock form-control-feedback"></span>
      </div>
      
      <div class="row">
        <div class="col-xs-8">
          <div class="checkbox icheck">

            <input type="checkbox" name="remember" {{ old('remember') ? 'checked' : '' }}> Remember Me
            
          </div>
        </div>
        <!-- /.col -->
        <div class="col-xs-4">
          <button type="submit" class="btn btn-primary btn-block btn-flat">Sign In</button>
        </div>
        <!-- /.col -->
      </div>
    </form>

    <!-- /.social-auth-links -->

    <a class="btn btn-link" href="{{ route('password.request') }}">Forgot Your Password?</a><br>
    <a href="register.html" class="text-center">Register a new membership</a>

  </div>
  <!-- /.login-box-body -->
</div>
</body>
@include('layouts.Admin.scripts')
<script>
  $(function () {
    $('input').iCheck({
      checkboxClass: 'icheckbox_square-blue',
      radioClass: 'iradio_square-blue',
      increaseArea: '20%' // optional
    });
  });
</script>
@include('layouts.Admin.footer')