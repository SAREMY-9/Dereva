@extends('back.layout.pageslayout')
@section('pageTitle', Isset($pageTitle) ? $pageTitle : 'DEREVA')
@section('content')

Keep Our Roads Safe........

@if(session('success'))

							<div class="alert alert-success btn btn-close">

								{{session('success')}}
								
							</div>

							@endif




@endsection
 

