<!DOCTYPE html>
<head>
	<!-- templatemo 418 form pack -->
    <!-- 
    Form Pack
    http://www.templatemo.com/preview/templatemo_418_form_pack 
    -->
	<title>City Blog - Signup</title>
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
						<h1>Create Account</h1>
					</div>
				</div>
				<div class="row">
				    <form method="POST" action="{{route('signup')}}">
						@csrf
						<div class="templatemo-one-signin col-md-6">
							<div class="form-group">
								<div class="col-md-12">		          	
									<label for="username" class="control-label">Username</label>
									<div class="templatemo-input-icon-container">
										<i class="fa fa-user"></i>
										<input type="text" class="form-control" id="username" name="username">
									</div>		            		            		            
								</div>              
							</div>
							<div class="form-group">
								<div class="col-md-12">
									<label for="email" class="control-label">Email</label>
									<div class="templatemo-input-icon-container">
										<i class="fa fa-lock"></i>
										<input type="email" class="form-control" id="email" name="email">
									</div>
								</div>
							</div>
							<div class="form-group">
								<div class="col-md-12">
									<label for="password" class="control-label">Password</label>
									<div class="templatemo-input-icon-container">
										<i class="fa fa-lock"></i>
										<input type="password" class="form-control" id="password" name="password">
									</div>
								</div>
							</div>
							<div class="form-group">
								<div class="col-md-12">
									<input type="submit" value="Signup" class="btn btn-warning">
								</div>
							</div>
						</div>
				    </form>
					<div>
						<img src="{{ asset('images/user.jpeg') }}" width="280px" height="290px" style="border-radius: 6px;" alt=""/>
					</div> 		
					<a href="{{route('loginuser')}}">Login, if already exists.</a>			    	
				</div>				 	
		      </form>		      		      
		</div>
	</div>
</body>
</html>