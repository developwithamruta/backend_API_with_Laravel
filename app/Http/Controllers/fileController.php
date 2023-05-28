<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\file;
class fileController extends Controller
{
  public function index(){
  	return "File Controller";
  }
  function upload(Request $request){
  	$file = $request->file('file');
  	$file=new file;
  	$file->filename=$request->file('file')->store('apiFile');
  	$result= $file->save();
  	if($result){
  		return "File inserted ".$result;
  	}else{
  		return "failed";
  	}
/*$name = $file->getClientOriginalName();
$extension = $file->getClientOriginalExtension();

  return $name." extension ".$extension;*//*
  */
/*  	return $req->all();
*/  }
}
