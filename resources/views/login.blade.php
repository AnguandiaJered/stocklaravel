<!DOCTYPE html>
<html>
<head>
	<!-- Basic Page Info -->
	<meta charset="utf-8">
	<title>Gestion Stock</title>

	<!-- Site favicon -->
	<link rel="apple-touch-icon" sizes="180x180" href="{{url('assets\vendors\images\Logo.jpg')}}">
	<link rel="icon" type="image/png" sizes="32x32" href="{{url('assets\vendors\images\Logo.jpg')}}">
	<link rel="icon" type="image/png" sizes="16x16" href="{{url('vendors\images\Logo.jpg')}}">

	<!-- Mobile Specific Metas -->
	<meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1">

	<!-- Google Font -->
	<link href="https://fonts.googleapis.com/css2?family=Inter:wght@300;400;500;600;700;800&display=swap" rel="stylesheet">
	<!-- CSS -->
	<link rel="stylesheet" type="text/css" href="{{url('assets\vendors\styles\core.css')}}">
	<link rel="stylesheet" type="text/css" href="{{url('assets\vendors\styles\icon-font.min.css')}}">
	<link rel="stylesheet" type="text/css" href="{{url('assets\vendors\styles\style.css')}}">

	<!-- Global site tag (gtag.js) - Google Analytics -->
	<script async src="https://www.googletagmanager.com/gtag/js?id=UA-119386393-1"></script>
	<script>
		window.dataLayer = window.dataLayer || [];
		function gtag(){dataLayer.push(arguments);}
		gtag('js', new Date());

		gtag('config', 'UA-119386393-1');
	</script>
<style type="text/css">
#lo{
width: 90px;
height: 65px;	
}
</style>
</head>
<body class="login-page">
	<div class="login-header box-shadow">
		<div class="container-fluid d-flex justify-content-between align-items-center">
			<div class="brand-logo">
				<a href="login.php">
					<h1>Stock manager</h1>
				</a>
			</div>
			<!-- <div class="login-menu">
				<ul>
					<li><a href="register.php">Register</a></li>
				</ul>
			</div> -->
		</div>
	</div>
	<div class="login-wrap d-flex align-items-center flex-wrap justify-content-center">
		<div class="container">
			<div class="row align-items-center">
				<div class="col-md-6 col-lg-7">
					<img src="{{url('assets\vendors\images\login-page-img.png')}}" alt="">
				</div>
				<div class="col-md-6 col-lg-5">
					<div class="login-box bg-white box-shadow border-radius-10">
						<div class="login-title">						
							<h2 class="text-center text-primary">Authentification</h2>
						</div>
						<form method="POST" action="{{route('authenticate')}}" autocomplete="off">
                        @csrf 
							<label for="Email">Email</label>							
							<div class="input-group custom">								
								<input type="text" id="email" name="email" class="form-control" placeholder="Enter your email" required/>
								<div class="input-group-append custom">
									<span class="input-group-text"><i class="icon-copy dw dw-user1"></i></span>
								</div>
							</div>
							<label for="password">Password</label>
							<div class="input-group custom">								
								<input type="password" id="password" name="password" class="form-control form-control-lg" placeholder="Enter your password" required/>
								<div class="input-group-append custom">								
									<span class="input-group-text"><i onclick="afficher()" class="dw dw-eye"></i></span>
								</div>
							</div>
							<div class="row pb-30">
								<div class="col-6">
									<div class="custom-control custom-checkbox">
										<input type="checkbox" class="custom-control-input" id="customCheck1">
										<label class="custom-control-label" for="customCheck1">Remember</label>
									</div>
								</div>
								<div class="col-6">
									<div class="forgot-password"><a href="#">Forgot Password</a></div>
								</div>
							</div>
							<div class="row">
								<div class="col-sm-12">
									<div class="input-group mb-0">										
										<input class="btn btn-primary btn-lg btn-block" type="submit" value="Sign In">
									</div>
								</div>
							</div>
						</form>
					</div>
				</div>
			</div>
		</div>
	</div>
	<!-- js -->
	
	<script src="{{url('assets\vendors\scripts\core.js')}}"></script>
	<script src="{{url('assets\vendors\scripts\script.min.js')}}"></script>
	<script src="{{url('assets\vendors\scripts\process.js')}}"></script>
	<script src="{{url('assets\vendors\scripts\layout-settings.js')}}"></script>
	<script>
		function afficher(){
			var input=document.getElementById("password");
			if(input.type==="password"){
				input.type="text";
			}
			else{
				input.type="password";
			}
		}
	</script>
</body>
</html>