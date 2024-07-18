<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <title>Forgot Password</title>

  <!-- Google Font: Source Sans Pro -->
  <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Source+Sans+Pro:300,400,400i,700&display=fallback">
  <!-- Font Awesome -->
  <link rel="stylesheet" href="/lte/plugins/fontawesome-free/css/all.min.css">
  <!-- icheck bootstrap -->
  <link rel="stylesheet" href="/lte/plugins/icheck-bootstrap/icheck-bootstrap.min.css">
  <!-- Theme style -->
  <link rel="stylesheet" href="/lte/dist/css/adminlte.min.css">

  <style>
    body {
      background-color: #f4f6f9;
    }

    .btn-primary {
      background-color: #F3BD00;
      border-color: #F3BD00;
    }
    .btn-primary:hover {
      background-color: #0C2B4B;
      border-color: #0C2B4B;
    }
    .card-primary.card-outline {
      border-top: 3px solid #F3BD00;
    }
    .input-group-text {
      background-color: #0C2B4B;
      border-color: #0C2B4B;
      color: white;
    }
  </style>

</head>
<body class="hold-transition login-page">
<div class="login-box">
  <div class="card card-outline card-primary">
    <div class="card-header text-center">
      <h1>SoboTrip</h1>
    </div>
    <div class="card-body">
      
      @if (Session::has('message'))
        <div class="alert alert-success" role="alert">
         {{ Session::get('message') }}
        </div>
      @endif

      <p class="login-box-msg">Forgot your password? Here you can reset the password.</p>
      <form action="{{ route('forgot.password.post') }}" method="POST">
        @csrf
        @if ($errors->has('email'))
          <span class="text-danger">{{ $errors->first('email') }}</span>
        @endif
        <div class="input-group mb-3">
          <input class="form-control" type="text" id="email" class="form-control" name="email" placeholder="Email">
          <div class="input-group-append">
            <div class="input-group-text">
              <span class="fas fa-envelope"></span>
            </div>
          </div>
        </div>
        <div class="row">
          <div class="col-12">
            <button type="submit" class="btn btn-primary btn-block">Send Password Reset Link</button>
          </div>
          <!-- /.col -->
        </div>
      </form>
    </div>
    <!-- /.login-card-body -->
  </div>
</div>
<!-- /.login-box -->

<!-- jQuery -->
<script src="/lte/plugins/jquery/jquery.min.js"></script>
<!-- Bootstrap 4 -->
<script src="/lte/plugins/bootstrap/js/bootstrap.bundle.min.js"></script>
<!-- AdminLTE App -->
<script src="/lte/dist/js/adminlte.min.js"></script>
</body>
</html>
