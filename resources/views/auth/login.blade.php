<!DOCTYPE html>
<html>
<head>
	<title>Login</title>
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
  color: black;
	}
		.main{
		width: 350px;
		height: 300px;
		text-align: center;
		background-color: rgba(186, 178, 156,0.4);
		margin: 0 auto;
		margin-top: 150px;
		border-radius: 19px;
	}
	.main img{
		width: 120px;
		height: 120px;
		margin-top: -50px;
		margin-bottom: 30px;
	}
	input{
		border-radius: 19px;
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
	 <nav class="navbar ">
  <div class="container-fluid">
    <div class="navbar-header">
      <a class="navbar-brand" href="#"><span class="glyphicon glyphicon-home" aria-hidden="true"></span> Printer Online </a>
    </div>
  
    
    <ul class="nav navbar-nav navbar-right">
      <li><a href="{{route('register')}}"><span class="glyphicon glyphicon-user"></span> Sign Up</a></li>
    
    </ul>
  </div>
</nav>
	
	<div class="container">
	<div class="main cf">
		<img src="ikon printer.png">
	
	<div class="form ">
    <form method="POST" action="{{ route('login') }}">
                        @csrf
			<div class="form-input">
				
				<input type="email" class="@error('email') is-invalid @enderror" name="email" value="{{ old('email') }}" required autocomplete="email" autofocus>
                @error('email')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
			</div>
			<div class="form-input">
				
				<input type="password" class="@error('password') is-invalid @enderror" name="password" required autocomplete="current-password">

@error('password')
    <span class="invalid-feedback" role="alert">
        <strong>{{ $message }}</strong>
    </span>
@enderror
			</div>
			<div class="tombol">
				<button type="submit" name="login">Login</button>
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