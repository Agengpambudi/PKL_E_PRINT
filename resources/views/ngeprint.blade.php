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
      <!-- <li><a href="#"><span class="glyphicon glyphicon-user" aria-hidden="true"></span> Profil</a></li> -->
    </ul>
            <ul class="nav navbar-nav navbar-left" id="myNavbar">
               <li><a href="#"><span class="glyphicon glyphicon-print" aria-hidden="true"></span> SAYA INGIN PRINT</a></li>
               <!-- <li><a href="#"><span class="glyphicon glyphicon-globe" aria-hidden="true"></span> ANTARKAN PRINT</a></li> -->
    </ul>
    </div>
  </div>
</nav>

<div class="panel panel-default" style="
background-color: transparent; margin-bottom: -5px;
">

  <div class="panel-heading" style="text-align: center;">isi data berikut</div>
  <form action='/add-ngeprint' method='post' enctype="multipart/form-data">
  @csrf
    <div class="container">
      <div class="form-group">
        <label for="staticEmail" class="col-form-label">Print Berapa kali </label>
  
          <input type="text" class="form-control" name='jumlah' id="staticEmail" value=" ">
          @error('jumlah')
    <span class="invalid-feedback" role="alert">
        <strong>{{ $message }}</strong>
    </span>
@enderror
      </div>
  
      <div class="form-group">
        <label for="exampleFormControlFile1">Upload File Yang di Print</label>
        <input type="file" class="form-control-file" name='file' id="exampleFormControlFile1">
        @error('file')
    <span class="invalid-feedback" role="alert">
        <strong>{{ $message }}</strong>
    </span>
@enderror
      </div>
      <button type="submit" class="btn btn-success">Success</button>
    </div>
  
  </form>
</div>

</body>
</html>