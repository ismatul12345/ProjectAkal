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
            <div class="col-lg-3">
               <h4>Game anak 1</h4>
               <img src="{{ url('uploads/gambar1.jpg') }}" style="width: 75px; height: 75px;"/>
               <p>sehari bersama Acel</p>
               <br>Rp. 50.000

                 <a href="{{route('showproductdetail')}}"><button type="button" class="btn btn-default" ><i class="fa fa-plus"></i> Detail</button></a>
            </div>
            <div class="col-lg-3">
            	<h4>Game anak 2</h4>
               <img src="{{ url('uploads/gambar1.jpg') }}" style="width: 75px; height: 75px;"/>
               <p>sehari bersama Acel</p>
               <br>Rp. 50.000

                 <button type="submit" class="btn btn-default">Beli</button>
               
            </div>
            <div class="col-lg-3">
                   <h4>Game anak 3</h4>
               <img src="{{ url('uploads/gambar1.jpg') }}" style="width: 75px; height: 75px;"/>
               <p>sehari bersama Acel</p>
               <br>Rp. 50.000

                 <button type="submit" class="btn btn-default">Beli</button>
            </div>
                <div class="col-lg-3">
                  <h4>Game anak 4</h4>
               <img src="{{ url('uploads/gambar1.jpg') }}" style="width: 75px; height: 75px;"/>
               <p>sehari bersama Acel</p>
               <br>Rp. 50.000

                 <button type="submit" class="btn btn-default">Beli</button>
            </div>
        </div>   <div class="row">
            <div class="col-lg-3">
                   <h4>Game anak 5</h4>
               <img src="{{ url('uploads/gambar1.jpg') }}" style="width: 75px; height: 75px;"/>
               <p>sehari bersama Acel</p>
               <br>Rp. 50.000

                 <button type="submit" class="btn btn-default">Beli</button>
            </div>
            <div class="col-lg-3">
                   <h4>Game anak 6</h4>
               <img src="{{ url('uploads/gambar1.jpg') }}" style="width: 75px; height: 75px;"/>
               <p>sehari bersama Acel</p>
               <br>Rp. 50.000

                 <button type="submit" class="btn btn-default">Beli</button>
            </div>
            <div class="col-lg-3">
                <h4>Game anak 7</h4>
               <img src="{{ url('uploads/gambar1.jpg') }}" style="width: 75px; height: 75px;"/>
               <p>sehari bersama Acel</p>
               <br>Rp. 50.000

                 <button type="submit" class="btn btn-default">Beli</button>
            </div>
                <div class="col-lg-3">
                <h4>Game anak 8</h4>
               <img src="{{ url('uploads/gambar1.jpg') }}" style="width: 75px; height: 75px;"/>
               <p>sehari bersama Acel</p>
               <br>Rp. 50.000

                 <button type="submit" class="btn btn-default" href="#">Beli</button>
            </div>
        </div> 

    </div>
</div>
</body>
@endsection
@section('footer')
 <h4>PT Akal Interaktif</h4>
 <h5>Footer</h5>
@endsection
