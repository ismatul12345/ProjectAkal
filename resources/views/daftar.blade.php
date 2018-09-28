@extends('template')
@section('konten')
<!doctype html>

<head>
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
 <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
 <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>



</head>
<body>

  <div class="constainer">
    <div class="row">
      <div class="col-md-6 col-md-offset-3">
        <center><h2>Daftar</h2></center>
        <hr>
        <form action="{{route('daftar')}}" enctype="multipart/form-data" class="form-horizontal" method="POST">
          {{ csrf_field() }}
          <div class="form-group">
            <label class="control-label col-xs-3 for ="text-input">Nama</label>
            <div class="col-xs-9">
                <input type="text" id="nama" class="form-control" name="nama" placeholder="Masukkan nama lengkap" required>
            </div>
          </div>

           <div class="form-group">
            <label class="control-label col-xs-3" for ="text-input">Jenis Kelamin</label>
            <div class="col-xs-2">
              <label class="radio-inline">
                  <input type="radio"  id="jenis_kelamin" name="jenis_kelamin" value="Perempuan" required> Perempuan
              </label>
            </div>
            <div class="col-xs-2">
              <label class="radio-inline">
                  <input type="radio" id="jenis_kelamin" name="jenis_kelamin" value="Laki-Laki" required> Laki-Laki
              </label>
            </div>
          </div>

          <div class="form-group">
            <label class="control-label col-xs-3" for="text-input">Email</label>
            <div class="col-xs-9">
              <input type="text" id="email" class="form-control" name="email" placeholder="Masukkan email" required>
            </div>
          </div>
          <div class="form-group">
            <label class="control-label col-xs-3" for="text-input">Password</label>
            <div class="col-xs-9">
              <input type="password" id="password" class="form-control" name="password" placeholder="Masukkan password" required>
            </div>
          </div>
          <div class="form-group">
            <label class="control-label col-xs-3" for="text-input">Konfirmasi password</label>
            <div class="col-xs-9">
              <input type="password" id="konfirmasi_password" class="form-control" name="konfirmasi_password" placeholder="Masukkan konfirmasi password" required >
            </div>
          </div>
          <div class="form-group">
            <div class="col-xs-offset col-xs-9">
                <center><button type="submit" class="btn btn-default" id="btnSubmit" ><i class="fa fa-plus"></i>Daftar</button></center>
            </div>
          </div>
        </form>
      </div>
    </div>
  </div>

</body>
<script type="text/javascript" src="http://ajax.googleapis.com/ajax/libs/jquery/1.8.3/jquery.min.js"></script>
    <script type="text/javascript">
        $(function () {
            $("#btnSubmit").click(function () {
                var password = $("#password").val();
                var konfirmasi_password = $("#konfirmasi_password").val();
                if (password != konfirmasi_password) {
                    alert("Passwords do not match.");
                    return false;
                }
                return true;
            });
        });
    </script>
@endsection
@section('footer')
 <h4>PT Akal Interaktif</h4>
 <h5>Footer</h5>
@endsection
