<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Sample;
use Session;
class HomeController extends Controller
{
    public function addpost(){
    	return view('frontend.addpost');
    }
    public function allpost(){
        $obj = Sample::all();
            return view('frontend.allpost', ['data'=>$obj]);

    }
   

    public function savepost(Request $req){
        $obj = new Sample();
    	$obj->title = $req->title;
    	$obj->description = $req->description;
    	if($obj->save()){
            Session::put('message', 'Successfully Registered...!!');
            return view('frontend.addpost');
        }
    }

    public function edit($id){
       
        $sample = Sample::find($id);       
       
        return view('frontend.edit',['data'=>$sample]);
    }
    public function update(Request $req,$id){
       
        $obj = Sample::find($id);       
        $obj->title = $req->title;
        $obj->description = $req->description;
         if($obj->save())
        {
             Session::put('message', 'Successfully Registered...!!');
            return redirect('allpost');
        }
       // return view('frontend.edit',['data'=>$sample]);
    }

}

