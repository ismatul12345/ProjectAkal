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
        <center><h2>Masuk</h2></center>
        <hr>
        <form action="{{route('actionLogin')}}"class="form-horizontal" method="POST">
          <div class="form-group">
            <label class="control-label col-xs-3" for="email">Email</label>
            <div class="col-xs-9">
              <input type="text" class="form-control" name="email" placeholder="Masukkan email">
            </div>
          </div>
          <div class="form-group">
            <label class="control-label col-xs-3" for="password">Password</label>
            <div class="col-xs-9">
              <input type="password" class="form-control" name="password" placeholder="Masukkan password">
            </div>
          </div>
          <div class="form-group">
            <div class="col-xs-offset col-xs-9">
            <center><button type="button" class="btn btn-default" ><i class="fa fa-plus"></i>Masuk</button></center>
            </div>
          </div>
        </form>
      </div>
    </div>
  </div>
</body>
@endsection
@section('footer')
 <h4>PT Akal Interaktif</h4>
 <h5>Footer</h5>
@endsection
