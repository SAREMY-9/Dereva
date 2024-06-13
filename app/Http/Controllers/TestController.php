<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use Illuminate\Support\Facades\Auth;

use App\Models\Test;
use App\Models\Bookings;
use App\Models\Admins;


class TestController extends Controller
{


    public function userResults(){  

        return view('userresuilts'); 

    }

    public function uploadResults(Request $request){

        $validatedData=$request->validate([

            'candidateId'=>'required|exists:tests,candidateId',

        ]);

        $test= Test::where('candidateId', $validatedData['candidateId'])->first();

        if($test){

            $user=Bookings::where('id',$test['candidateId'])->first();

            if($user){

                if($test->theoryTest==='Passed' && $test->practicalTest==='Passed'){


                 $user->results='Passed';

                 $user->save();

                 return redirect()->route('resuilts')->with('success','Success!! results uploaded.');
    
                }

                else{

                    $user->results='Failed';

                    $user->save();

                    return redirect()->route('resuilts')->with('success','Success results uploadeded.');
                    

                }

                $user->save();

            }
        } 

        else{

            return redirect()->route('resuilts')->with('error','The user either didnt take the test or failed either');



        }


   


/**/
        //
        
    }


    public function resuilts(){

        return view('test.results');
    }



    public function booking(){

        if(Auth::check()){

       return view('booking');  

       }

       else{

        return view('welcome');

       }
        
    }

   
  public function bookingTest(Request $request)
  {

      //   dd($request);

         $request->validate([
    
         'name'=>['required','string','max:65'],
         'identityNo'=>['required','min:8'],
         'tdbNo'=>['required'], 
         'drivingSch'=>['required'],
         'class'=>['required'],

      ]);

      


      $booked = Bookings::create([

        'name'=> $request->name,
        'identityNo'=> $request->identityNo,
        'tdbNo'=> $request->tdbNo,
        'drivingSch'=> $request->drivingSch,
        'class'=> $request->class,

      ]);
    

      if($booked){

        return redirect()->route('dashboard')->with('success','You have succesfully booked for DEREVA test');

      }

      else{

        return redirect()->route('welcome');

      }

  }


    public function theoryTest(Request $request)
    {

        $validateInfo= $request->validate([

            'candidateId'=>'required|exists:bookings,id',
            'officerId'=>'required|exists:admins,id',  
            'theoryTest'=>'required|in:Passed,Failed'                                    

        ]);

     //store the test in db

        Test::create($validateInfo);

    return redirect()->route('admin.home')->with('success','TEST SUCCESSFULLY ADMINISTERED. PROCEED TO PRACTICALS!');  


    }



    public function testVerify(){

          return view('test.verify');
     
    }



    public function practical(){
          
        return view('test.practical');

    }


 public function testPractical(Request $request)
{

    
    // Validate the form data
    $validatedData = $request->validate([
        'candidateId' => 'required|exists:tests,candidateId',  
        'practicalTestAdmin' => 'required', 
        'pracTest' => 'required|in:Passed,Failed',
    ]);


    // Find the test record based on the candidateId
    $test = Test::where('candidateId', $validatedData['candidateId'])->first();
    

    // Update the practicalTest field
    if ($test) {
        $test->practicalTest = $validatedData['pracTest'];
        $test->practicalTestAdmin = $validatedData['practicalTestAdmin'];
        $test->save();

        //add a practical officer field.



        return redirect()->route('practical')->with('success', 'CONGRATULATIONS!!! THE DRIVERS TEST IS COMPLETED');
    } else {
        return redirect()->back()->with('error', 'Test record not found');
    }
}
   
    


    public function pTest(Request $request){

        $validateInfo=$request->validate([

            'candidateId' => 'required|exists:tests,candidateId', 

        ]);

        $user=$validateInfo;

        if($user){

            return redirect()->route('practical')-> with('success','THE USER IS CLEARED TO TAKE PRACTICALS'); 

        }

        else {
            
            return "Hello the user is not found";
        }
    }

    public function testUpload(){

        $test= Test()->where('theoryTest','practicalTest');

        return view('prac',$test);
    }
}
