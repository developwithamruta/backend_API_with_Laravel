<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Test;
use Validator;

class Testcontroller extends Controller
{
    /*********Get single record or all records by API *********/
    function list($id=null){
    	return $id?Test::find($id):Test::all();
    }
    /*********Add record by API *********/
    function add_record(Request $req){ 
    	$test=new Test;
    	$test->name=$req->name;
    	$result=$test->save();
    	if($result){

    	return ["result"=>"done"];
    	}else{

    	return ["result"=>"failed"];
    	}
    }

    /*********Update record by API *********/
    public function update_record(Request $req){
            $test=Test::find($req->id);
            $test->name=$req->name;
            $result=$test->save();
            if($result){

                return ["result"=>"done"];
                }else{

                return ["result"=>"failed"];
                }
    }
    /*********Delete record by API *********/
    public function delete_record($id){
        $test=Test::find($id);
        $result=$test->delete();  
            if($result){

                return ["result"=>"done"];
                }else{

                return ["result"=>"failed"];
                }
                /**For multiple**/
               /* $id = '1,2,3';
$ids = explode(",", $id);
$result = Device::whereIn('id', $ids)->delete();*/
}
   /************search record***************/
        public function search_record($name){
            return Test::where('name','like','%'.$name.'%')->get();
        }

 /************API Form Validation record***************/
    public function api_form_validation(Request $req){

        $rules=array(
            'name'=>"required"
        );
       $validation_result= Validator::make($req->all(),$rules);
       if($validation_result->fails()){
                return $validation_result->errors();
       }else{
        echo "Validator true";
       }
    }
}
