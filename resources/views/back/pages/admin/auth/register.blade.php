<!DOCTYPE html>
<html>
	<head>
		<!-- Basic Page Info -->
		<meta charset="utf-8" />
		<title>@yield('DEREVA','DEREVA')</title>

		<!-- Site favicon -->
		<link
			rel="apple-touch-icon"
			sizes="180x180"
			href="/back/vendors/images/apple-touch-icon.png"
		/>
		<link
			rel="icon"
			type="image/png"
			sizes="32x32"
			href="/back/vendors/images/favicon-32x32.png"
		/>
		<link
			rel="icon"
			type="image/png"
			sizes="16x16"
			href="/back/vendors/images/favicon-16x16.png"
		/>

		<!-- Mobile Specific Metas -->
		<meta
			name="viewport"
			content="width=device-width, initial-scale=1, maximum-scale=1"
		/>

		<!-- Google Font -->
		<link
			href="https://fonts.googleapis.com/css2?family=Inter:wght@300;400;500;600;700;800&display=swap"
			rel="stylesheet"
		/>
		<!-- CSS -->
		<link rel="stylesheet" type="text/css" href="/back/vendors/styles/core.css" />
		<link
			rel="stylesheet"
			type="text/css"
			href="/back/vendors/styles/icon-font.min.css"
		/>
		<link rel="stylesheet" type="text/css" href="/back/vendors/styles/style.css" />

	</head>
	<body class="login-page">
		

		
		<div class="login-wrap d-flex align-items-center flex-wrap justify-content-center">
			<div class="container">
				<div class="row align-items-center">
					<div class="col-md-6 col-lg-7">
						<img src="/back/vendors/images/login-page-img.png" alt="" />
					</div>
					<div class="col-md-6 col-lg-5">
						<div class="login-box bg-white box-shadow border-radius-10">
							<div class="login-title">
								<h2 class="text-center text-success">ADMIN REGISTRATION</h2>
							</div>


							
               <!----Admin's registration form ---->


							<form action="{{route('admRegister')}}" method="POST"> 

								@csrf
								
						
                                <div class="input-group custom">
									<input
										type="text"
										class="form-control form-control-lg"
										placeholder="Enter both names...."
                                        name="name"
										autocomplete="name"
									/>

                                    
									<div class="input-group-append custom">
										<span class="input-group-text"
											><i class="icon-copy dw dw-user1"></i
										></span>
									</div>
								</div>



                                
                                <div class="input-group custom">
									<input
										type="number"
										class="form-control form-control-lg"
										placeholder="ID Number...."
                                        name="idNo"
										autocomplete="Identification"
									/>

                                    
									<div class="input-group-append custom">
										<span class="input-group-text"
											><i class="fa fa-id-card-o"></i
										></span>
									</div>
								</div>

                                <div class="input-group custom">
									<input
										type="text"
										class="form-control form-control-lg"
										placeholder="Email...."
                                        name="email"
										autocomplete="email"
									/>

                                    
									<div class="input-group-append custom">
										<span class="input-group-text"
											><i class="fa fa-envelope-o"></i
										></span>
									</div>
								</div>
 
                                <div class="input-group custom">
									<input
										type="password"
										class="form-control form-control-lg"
										placeholder="Password...."
                                        name="password"
										
									/>

                                    
									<div class="input-group-append custom">
										<span class="input-group-text"
											><i class="dw dw-padlock1"></i
										></span>
									</div>
								</div>




								<div class="row">
									<div class="col-sm-12">
										<div class="input-group mb-0">
											

											<button
												class="btn btn-success btn-lg btn-block"
											
												  type="submit" 
												>Register</button
											>  
										</div>
									</form>
									</div>
								</div>

						</div>
					</div>
				</div>
			</div>
		</div>
		
			
		</div>
		
		<!-- welcome modal end -->
		<!-- js -->
		<script src="/back/vendors/scripts/core.js"></script>
		<script src="/back/vendors/scripts/script.min.js"></script>
		<script src="/back/vendors/scripts/process.js"></script>
		<script src="/back/vendors/scripts/layout-settings.js"></script>

	</body>
</html>
