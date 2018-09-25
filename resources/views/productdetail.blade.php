@extends('template')
@section('konten')
<!doctype html>

<head>
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
 <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
 <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>



</head>
<body>
  <div class="body-content">
        <div class="row">
            <div class="col-lg-6"> 
               <img src="{{ url('uploads/gambar1.jpg') }}" style="width: 200px; height: 200px;"/>  
            </div>
            <div class="col-lg-6">
              <h4>Game anak 1</h4>
              <P>Sehari bersama Acel</P>
              <p>Rp.50.000</P> 
                <button type="submit" class="btn btn-default">Tambah keranjang</button>
               <button type="submit" class="btn btn-default">Beli</button>
            </div>
           </div>
         </div>

</body>
@endsection
@section('footer')
 <h4>PT Akal Interaktif</h4>
 <h5>Footer</h5>
@endsection
