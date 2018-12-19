<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Sample;
class HomeController extends Controller
{
    public function addpost(){
    	return view('frontend.addpost');
    }
    public function allpost(){
        return view('frontend.allpost');
    }
   

    public function savepost(Request $req){
        $obj = new Sample();
    	$obj->title = $req->title;
    	$obj->description = $req->description;
    	if($obj->save()){
            return view('frontend.index');
        }
    }

}

