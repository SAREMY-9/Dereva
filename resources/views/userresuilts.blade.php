<x-app-layout>

<!DOCTYPE html>
<html>
	<head>
		<!-- Basic Page Info -->
		<meta charset="utf-8" />
		<title>@yield('pageTitle')</title>

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

	
		<script>
			(function (w, d, s, l, i) {
				w[l] = w[l] || [];
				w[l].push({ "gtm.start": new Date().getTime(), event: "gtm.js" });
				var f = d.getElementsByTagName(s)[0],
					j = d.createElement(s),
					dl = l != "dataLayer" ? "&l=" + l : "";
				j.async = true;
				j.src = "https://www.googletagmanager.com/gtm.js?id=" + i + dl;
				f.parentNode.insertBefore(j, f);
			})(window, document, "script", "dataLayer", "GTM-NXZMQSS");
		</script>



    <!----for custom stylesheets----->


        @stack('stylesheets')


		<!-- End Google Tag Manager -->
	</head>
	<body>
		


        
		<div class="login-wrap d-flex align-items-center flex-wrap justify-content-center">
			<div class="container">
				<div class="row align-items-center">
					<div class="col-md-6 col-lg-7">
						<img src="/back/vendors/images/login-page-img.png" alt="" />
					</div>
					<div class="col-md-6 col-lg-5">
						<div class="login-box bg-white box-shadow border-radius-10">
							<div class="login-title">
								<h2 class="text-center text-success">CHECK RESULTS</h2>
							</div>


							
               <!----Driver's test booking form ---->



			   
                            
							<form action="{{route('search')}}" method="POST"> 
								
								@csrf
								
                               
                                <div class="input-group custom">
									<input
										type="text"
										class="form-control form-control-lg"
										placeholder="TDB Number...."
                                        name="tdbNo"
										autocomplete="tdbNo"
									/>

                                    
									<div class="input-group-append custom">
										<span class="input-group-text"
											><i class="dw dw-search2 search-icon"></i
										></span>
									</div>
								</div>
 
                               
                              
                               
								<div class="row">
									<div class="col-sm-12">
										<div class="input-group mb-0">
											

											<button
												class="btn btn-success btn-lg btn-block"
											
												  type="submit" 
												>Submit</button
											>  
										</div>


									</form>
										<div
											class="font-16 weight-600 pt-10 pb-10 text-center"
											data-color="#707373"  
										>
											OR
										</div>
									
									</div>
								</div>
							
							


							<div class="input-group mb-0">
								<a
									class="btn btn-outline-success btn-lg btn-block"
									href="{{route('dashboard')}}" 
									>Go to Dashboard</a
								>
							</div>


                            <!----End of driver's test booking form ---->


						</div>
					</div>
				</div>
			</div>
		</div>
		
			
    </body>
</html>
</x-app-layout>