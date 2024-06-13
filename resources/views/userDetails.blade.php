<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<meta http-equiv="X-UA-Compatible" content="ie=edge">
	<title>@yield('title','DEREVA')</title>

	<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
	<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous"></script>

</head>
<body>

	
<div class="container-md my-5">

	<div class="row">
		<div class="col-4">

			<h5 class="text-color-primary">DEREVA</h5>
	

		</div>


		<div class="col-4">

			<h5 class="text-color-primary">User Info</h5>

		</div>

		
		<div class="col-4">

			<h5 class="text-color-primary">Browse</h5>

		</div>
	
@if($user)

<div class="table-responsive">

<table class="table table-striped">

	
	<thead>
		   <tr>
			<th>LearnerId</th>
			<th>Name</th>
			<th>identityNo</th>
			<th>TDB No</th>
			<th>Driving Sch</th>
			<th>Class</th>
			<th>Resuilts</th>
		   </tr>
	</thead>

	<tbody>

		<tr>             


			<td>  {{$user->id}}    </td>
			<td>  {{$user->name}}</td>
			<td>  {{$user->identityNo}} </td>
			<td>  {{$user->tdbNo}}</td>
			<td>  {{$user->drivingSch}}</td>
			<td>  {{$user->class}} </td>
			<td>  {{$user->results}}</td>

		</tr>

	</tbody>

</table>

<a class="btn btn-success" href="{{route('dashboard')}}">Close</a>

</div>

		</div>

	</div>

</div>

@else

<p>{{session('error')}}</p>

@endif


       @if(session('error'))

		<div class="alert alert-danger">

			{{session('error')}}  

		</div>

		@endif



</body>
</html>
    
