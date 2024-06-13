@extends('back.pages.admin.home')
@section('content')



<form-group>

<form action="{{route('uploadResults')}}"  method="POST">

    @csrf
<h6>UPLOAD RESUILTS</h6><br>

    <label>Enter Candidate ID</label>
    <input type="text"  name="candidateId"  value="" placeholder="0123456789......"><br><br>
    <br><hr>
     <button type="submit" class="btn btn-success">Upload</button>
     
     <br>
     <br>
     <br>
     
</form>





@if(session('error'))

<div class="alert alert-danger">

<h4>{{session('error')}}</h4>

</div>

@endif
</form-group>


<!----
  @if(session('success'))

   <div class="alert alert-success">

       {{session('success')}}

   </div>

   @endif

--->


<a href="{{route('admin.home')}}" class="btn btn-light"><h6>Home</h6></a>


@endsection