@extends('back.pages.admin.home')
@section('content')



<form-group>

<form action="{{route('testPractical')}}"  method="POST">

    @csrf
<h6>PRACTICAL-TEST PART II</h6><br>
    <label>Enter LearnerID</label>
    <input type="text"  name="candidateId"  value="" placeholder="#0123456789......"><br><br> 
    <label>Enter Officer ID</label>
    <input type="text"  name="practicalTestAdmin"  value="" placeholder="#0123456789......"><br><br>

    <label>Candidate Performance</label>
    <hr>
       <select name="pracTest">
       
            <option value="Passed">Passed</option>
            <option value="Failed">Failed</option>
   
       </select>
    <br><hr>
     <button type="submit" class="btn btn-success">Submit Score</button>
     
     <br>
     <br>
     <br>
     
</form>
</form-group>



  @if(session('success'))

   <div class="alert alert-success">

       {{session('success')}}

   </div>

   @endif


   @if(session('error'))

   <div class="alert alert-danger">

       {{session('error')}}

   </div>

   @endif




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