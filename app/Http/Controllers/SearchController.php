<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

//use App\Models\Sellers; 

use App\Models\Bookings;

class SearchController extends Controller
{

      public function search(Request $request)
      {

         $verify=$request->validate([
            
          'tdbNo'=>'required|exists:bookings,tdbNo',

         //  'search'=>'required|exists:admins,name',  


         ] ,  [

               'tdbNo.required'=>'This field is required',
               'tdbNo.exists'=>'This user does not exist in our system',    

         ]
      
      
      
      );
         
         //check if user exists
        
         $tdb=$verify;
         $user=Bookings::where('tdbNo',$tdb)->first();

         if($user)
         {

           // return view('userDetails');

            return view('userDetails',compact('user'))->with('success','This user is booked for the test');

         }

         else
      {
         
 
         return redirect()->route('search')->with('error','The TDB is not booked!'); 

           }        
      }    


      
      public function pTest(Request $request)

      {
    
            $validateNo=$request-> validate([
    
            'candidateId' => 'required|exists|tests,candidateId',
    
          ]);
    
            $info=$validateNo;
    
            $val= Test::where('candidateId',$info)->first();
    
            if($val)
    
            return redirect()->route('admin');  
    
            else{
    
                return back()->with('error','The learner theory test doent exist');
            }
    
    
        //  return view('userDetails',['user'=>Test::findOrFail($user)]);
    
    
      }


      public function userResuilts(){

         return view('userresuilts');

      }



}


