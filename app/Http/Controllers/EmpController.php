<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

use App\Models\salary;

class EmpController extends Controller
{
    //
    public function index(){
    	return salary::all();
    	/*return DB::connection('mysql2')->table('salary')->get();*/
    }
}
