<?php

namespace App\Http\Controllers\User;

use App\Departments;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class DepartmentController extends Controller
{
    public function index(){
        $table = Departments::orderBy('created_at','DESC')->get();
        return view('user.department')->with(['table'=>$table]);
    }
}
