@extends('back.pages.admin.home')
@section('content')



<form-group>

<form action="{{ route('pTest')}}"  method="POST">

    @csrf
<h6>VERIFY THEORY TEST</h6><br>
    <label>Candidate ID</label>
    <input type="text"  name="candidateId"  value="" placeholder="0123456789......"><br><br>
    <br><hr>
     <button type="submit" class="btn btn-success">Verify</button>
     
     <br>
     <br>
     <br>
     
</form>
</form-group>


<!----
  @if(session('success'))

   <div class="alert alert-success">

       {{session('success')}}

   </div>

   @endif

--->


<a href="{{route('admin.home')}}" class="btn btn-light"><h6>Home</h6></a>

<!-- report errors --> 
    @if ($errors->any())
    <div class="alert alert-danger">
        <ul>
            @foreach ($errors->all() as $error)
                <li>{{ $error }}</li>
            @endforeach
        </ul>
     </div>
     
    @endif

@endsection