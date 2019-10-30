<!DOCTYPE html>
<html>
<head>
			<!-- Latest compiled and minified CSS -->
<link rel="stylesheet" href="css/bootstrap.min.css" >

<!-- Optional theme -->
<link rel="stylesheet" href="css/bootstrap-theme.min.css" >

<!-- Latest compiled and minified JavaScript -->
<script src="js/bootstrap.min.js" ></script> 
<style type="text/css">


body{ 
  background-image: url(markus-spiske-440099-unsplash.jpg);
  background-size: cover;
}

a {
  text-decoration: none;
  color: black;
}
</style>
	<title> SAYA INGIN PRINT </title>
</head>
<body>
   <nav class="navbar">
  <div class="container-fluid">
     <a class="navbar-brand" href="/welcome"><span class="glyphicon glyphicon-home" aria-hidden="true"></span> Printer Online </a>

    <!-- Brand and toggle get grouped for better mobile display -->
    <div class="navbar-header">
    
  
    </div>

    <!-- Collect the nav links, forms, and other content for toggling -->
    <div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
      <ul class="nav navbar-nav">
          </ul>
              <ul class="nav navbar-nav navbar-right" id="myNavbar">

    </ul>
            <ul class="nav navbar-nav navbar-left" id="myNavbar">
      
               <li><a href="{{ route('logout') }}"
               onclick="event.preventDefault();
                             document.getElementById('logout-form').submit();"><span class="glyphicon glyphicon-globe" aria-hidden="true"></span> LOG OUT </a>
                             </li>
                             <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
                @csrf
            </form>
    </ul>
    </div>
  </div>
</nav>

<div class="panel panel-default">

  <div class="panel-heading" style="text-align: center;">Daftar yang sedang Print</div>
 
<table class="table table-striped">
  <thead>
    <tr>
      <th scope="col">#</th>
      <th scope="col">Nama</th>
      <th scope="col">Lembar</th>
      <th scope="col">Status</th>
      <th scope="col">download</th>
      @if(Auth::check())
      @if(Auth::user()->level == 'admin')
      <th scope="col">aksi</th>
      @endif
      @endif
    </tr>
  </thead>
  <tbody>
      @php
$no=1;
      @endphp
   @foreach ($datas as $data) 
 
  <tr>
      <th scope="row">{{$no++}}</th>
      <td>{{$data->user->name}}</td>
      <td>{{$data->jumlah}}</td>
      <td>{{$data->status}}</td>
      <td><a href="/dokumen/{{$data->file}}">{{$data->file}}</a></td>
      @if(Auth::check())
      @if(Auth::user()->level == 'admin')
      <td>
      <a href="/ngeprint/proses/{{$data->id}}" class="btn btn-success">Proses</a>
      <a href="/ngeprint/ditolak/{{$data->id}}" class="btn btn-danger">Ditolak</a>
      <a href="/ngeprint/selesai/{{$data->id}}" class="btn btn-warning">Selesai</a>
      </td> 

      @endif
      @endif
    </tr>
 
 @endforeach
  </tbody>
</table>

  
</div>

</body>
</html>