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

.kata{
  text-align: center;
  font-weight: bold;
  font-size: 37px;
color: #484c4c;
text-shadow: 2px 2px 2px ;
}
.kata2{
  text-align: center;
  margin-bottom: 50px;
  color: white;
  text-shadow: 1px 1px 1px;}

  .listkata  {
  padding: 5px;
  text-align: center;
  border:none;
  margin-bottom: 15px;
  width: 400px;
  background-color: rgba(18,24,35,0.5);
  color: white;
  display: block;
border-radius: 14px;

}
 
 .listkata1 {
  padding: 5px;
  text-align: center;
  border:none;
  margin-bottom: 15px;
  width: 400px;
  background-color: rgba(18,24,35,0.5);
  color: white;
  display: block;
border-radius: 14px;
 }
 
.container {
  text-align: center
}

.kotake{
  margin-left: 300px;
}
.col-sm-3{
  margin-top: 200px;
  background-color:  rgba(18,24,35,0.5);
border-radius: 14px;
color: white;
background-image:url(rumah-minimalis-zaman-sekarang.jpg); 
background-size: cover;
height: 300px;

}
.col-sm-3 h3{
  margin-top: 180px;
}


    .sosmed{
      text-align: center;
      padding: 0px;
      margin-top: 10px;
      
      
    }
    .sosmed li{
      margin-top: 20px;
      padding-right: 20px;
      display: inline-block;
    }
    .sosmed li a img{
      padding-right: 20px;
      text-decoration: none;
      width: 45px;
      height: 40px;
      transition: 1s;
    }
    .sosmed li a img:hover{
      transform: scale(1.4);
      
    }
</style>

	<title>home</title>
</head>

<body>
 
   <nav class="navbar">
  <div class="container-fluid">
     <a class="navbar-brand" href="#"><span class="glyphicon glyphicon-home" aria-hidden="true"></span> Printer Online </a>

    <!-- Brand and toggle get grouped for better mobile display -->
    <div class="navbar-header">
    
  
    </div>

    <!-- Collect the nav links, forms, and other content for toggling -->
    <div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
      <ul class="nav navbar-nav">
          </ul>
              <ul class="nav navbar-nav navbar-right" id="myNavbar">
      <li><a href="/daftar-cetak"><span class="glyphicon glyphicon-user" aria-hidden="true"></span> Daftar Cetak </a></li>
    </ul>
            <ul class="nav navbar-nav navbar-left" id="myNavbar">
               <li><a href="/ngeprint"><span class="glyphicon glyphicon-print" aria-hidden="true"></span> SAYA INGIN PRINT</a></li>
               <!-- <li><a href="#"><span class="glyphicon glyphicon-globe" aria-hidden="true"></span> ANTARKAN PRINT</a></li> -->
               <li><a href="{{ route('logout') }}"
               onclick="event.preventDefault();
                             document.getElementById('logout-form').submit();"><span class="glyphicon glyphicon-globe" aria-hidden="true"></span> LOG OUT </a>
                             </li>

            <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
                @csrf
            </form>
              </ul>
    </div><!-- /.navbar-collapse -->
  </div><!-- /.container-fluid -->
</nav>
<div class="container">
  <div class="col-sm-8">
<div class = kata>
  <p> Solusi Saat Malas Ngantri Di Tempat Print-Print an </p >
</div>

  <div class = kata2>
  <h1> Kami Menyediakan Jasa Printer Online </h1>
  </div>
  <ul class=listkata >
  <h4> <span class="glyphicon glyphicon-ok-circle" aria-hidden="true"></span> AMBIL DI TEMPAT </h4>
  <h4>  PRINT WARNA 1 LEMBAR = Rp.1000 </h4>
  <h4> PRINT HITAM PUTIH 1 LEMBAR = Rp.500 </h4>
  </ul>

<div class="kotake">
  <ul class=listkata1 >
  <h4> <span class="glyphicon glyphicon-ok-circle" aria-hidden="true"></span> ANTAR  </h4>
  <h4>  PRINT WARNA 1 LEMBAR = Rp.1000 </h4>
  <h4> PRINT HITAM PUTIH 1 LEMBAR = Rp.500 </h4>
  <h4> + BIAYA ANTAR 8000 AREA KAMPUS UNEJ <h4>
  </ul>
  </div>
    
</div>
<div class="col-sm-3">
  <h3> ALAMAT KAMI : </h3>
  <h4>KECAMATAN SUMBERSARI</h4>
  <H4>JL.HALMAHERA GG 2 NO 14</H4>
  <H4>NO TELP 082300005723 </H4>

</div>
</div>
    <div class="sosmed cf">
      <li><a href="www.facebook.com"><img src="fb.png"></a></li>
      <li><a href="www.gmail.com"><img src="gmail.png"></a></li>
      <li><a href="www.twitter.com"><img src="twitter.png"></a></li>
      <li><a href="www.instagram.com"><img src="instagram.png"></a></li>
    </div>
</body>
</html>