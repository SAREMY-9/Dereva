Hello world!!!


<!---
  @if($user)
<h5>This is {{$user->name}}'s' Records</h5>
  <h4>Id: {{$user->id}}</h4>
  <h4>Name: {{$user->name}}</h4>
  <h4>Username: {{$user->username}}</h4>
  <h4>Email: {{$user->email}}</h4>
  <h4>Results: {{$user->results}}</h4>
  <h4>Phone: {{$user->phone}}</h4>
  <h4>Address: {{$user->address}}</h4>
  
  @endif


  @if($test)

  <h4>Id: {{$test->id}}</h4>
  <h4>Theory Test: {{$test->theoryTest}}</h4>
  <h4>Practical Test: {{$test->practicalTest}}</h4>
  <h4>Admin Id: {{$test->practicalTestAdmin}}</h4>
  <button>Edit Results</button>
  <button>Upload Results</button>

  @endif

  @if(session('success'))

  <h4>{{session('success')}}</h4>


  @endif

---->



