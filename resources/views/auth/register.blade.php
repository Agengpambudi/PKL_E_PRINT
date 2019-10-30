<!DOCTYPE html>
<html>
<head>
	<title>Register</title>
	<!-- Latest compiled and minified CSS -->
	<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css" integrity="sha384-BVYiiSIFeK1dGmJRAkycuHAHRg32OmUcww7on3RYdg4Va+PmSTsz/K68vbdEjh4u" crossorigin="anonymous">

	<!-- Optional theme -->
	<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap-theme.min.css" integrity="sha384-rHyoN1iRsVXV4nD0JutlnGaslCJuC7uwjduW9SVrLvRYooPp2bWYgmgJQIXwl/Sp" crossorigin="anonymous">

	<!-- Latest compiled and minified JavaScript -->
	<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js" integrity="sha384-Tc5IQib027qvyjSMfHjOMaLkfuWVxZxUPnCJA7l2mCWNIpG9mGCD8wGNIcPD7Txa" crossorigin="anonymous"></script>
	<style>
	body {
		background-image: url(markus-spiske-440099-unsplash.jpg);
		background-size: cover;
		background-repeat: no-repeat;
	}
		
	a {
  text-decoration: none;
  color: black;}
  
		.main{
		width: 350px;
		height: 460px;
		text-align: center;
		background-color: rgba(186, 178, 156,0.4);
		margin: 0 auto;
		margin-top: 55px;
		border-radius: 19px;
	}
	.main img{
		width: 120px;
		height: 120px;
		margin-top: -50px;
		margin-bottom: 30px;
	}
	input{
		border-radius: 5px;
		border:none;
		width: 300px;
		height: 45px;
		margin-bottom: 30px;
		padding-left: 30px;
	}

	.form-input ::before {
		 content: "\f007";
		font-family:"FontAwesome"; 
		padding-left: 5px;
		padding-top: 5px;
		position: absolute;
		color: #9B59B6;
		font-size: 35px;

	}

	.tombol button{
		padding: 8px 30px;
		background-color: #33c1c4;
		color: white;
		border-radius: 4px;
		border :none;
		font-family:"Roboto",sans-serif;
		font-weight: bold;
		font-size: 15px;
		cursor: pointer;
	}

	.footer{
		margin-top: 50px;
		color: black;
		text-align: center;
	}



		.cf:before,
.cf:after {
	content: " ";
	display: table;
}
.cf:after{
	clear: both;
}
.cf{
	*zoom :1;
}
	</style>
</head>
<body>
	
	 <nav class="navbar">
  <div class="container-fluid">
    <div class="navbar-header">
      <a class="navbar-brand" href="#"><span class="glyphicon glyphicon-home" aria-hidden="true"></span> Printer Online </a>
    </div>
 
    
    <ul class="nav navbar-nav navbar-right">
      <li><a href="login"><span class="glyphicon glyphicon-log-in"></span> Login</a></li>
    </ul>
  </div>
</nav>
	 <div id="container">
	
	<div class="main cf">
		<img src="ikon printer.png">
	
	<div class="form ">
		<form method="POST" action="{{ route('register') }}">
            @csrf
			<div class="form-input">
				
				<input type="text" name="name" placeholder="Masukkan Username">
			
			</div>
			<div class="form-input">
				
				<input type="password" name="password" placeholder="Masukkan Password">
			
			</div>

			<div class="form-input">
				<input type="email" name="email" placeholder="Masukkan email">
			</div>

			<div class="tombol">
				<button type="submit" name="login">Register</button>
			</div>
		</form>
	</div>
	</div>
		<div class="footer">
			&copy Copyright 2018
		</div>
	</div>
</body>
</html>