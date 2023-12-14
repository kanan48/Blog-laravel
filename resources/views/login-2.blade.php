<!DOCTYPE html>
<head>
	<!-- templatemo 418 form pack -->
    <!-- 
    Form Pack
    http://www.templatemo.com/preview/templatemo_418_form_pack 
    -->
	<title>City Blog - Login</title>
	<meta name="keywords" content="" />
	<meta name="description" content="" />
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<link href="http://fonts.googleapis.com/css?family=Open+Sans:300,400,700" rel="stylesheet" type="text/css">
	<link href="{{ asset('css/font-awesome.min.css') }}" rel="stylesheet" type="text/css">
    <link href="{{ asset('css/bootstrap.min.css') }}" rel="stylesheet" type="text/css">
    <link href="{{ asset('css/bootstrap-theme.min.css') }}" rel="stylesheet" type="text/css">
    <link href="{{ asset('css/bootstrap-social.css') }}" rel="stylesheet" type="text/css">
    <link href="{{ asset('css/templatemo_style.css') }}" rel="stylesheet" type="text/css">	
</head>
<body class="templatemo-bg-image-1">
	<div class="container">
		<div class="col-md-12">			
			<form class="form-horizontal templatemo-login-form-2" role="form" action="#" method="post">
				<div class="row">
					<div class="col-md-12">
						<h1>Login-Form</h1>
					</div>
				</div>
				<div class="row">
					<div class="templatemo-one-signin col-md-6">
						<form method="POST" action="{{route('loginuser')}}">
						@csrf
							<div class="form-group">
								<div class="col-md-12">		          	
									<label for="username" class="control-label">Username</label>
									<div class="templatemo-input-icon-container">
										<i class="fa fa-user"></i>
										<input type="text" class="form-control" name="username"/>
									</div>		            		            		            
								</div>              
							</div>
							<div class="form-group">
								<div class="col-md-12">
									<label for="password" class="control-label">Password</label>
									<div class="templatemo-input-icon-container">
										<i class="fa fa-lock"></i>
										<input type="password" class="form-control" name="password"/>
									</div>
								</div>
							</div>
							<div class="form-group">
								<div class="col-md-12">
									<input type="submit" value="LOG IN" class="btn btn-warning">
									<a href="{{url('/')}}">Sign-Up, new to site.</a>
								</div>
							</div>
						</form>
					</div>
					<div>
						<img src="{{ asset('images/user.jpeg') }}" width="260px" height="250px" style="border-radius: 6px;"/>
					</div> 					    	
				</div>				 	
		      </form>		      		      
		</div>
	</div>
</body>
</html>