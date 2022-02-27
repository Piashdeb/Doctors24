<?php

namespace App\Http\Controllers\User;

use App\Departments;
use App\Doctors;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class DoctorsController extends Controller
{
    public function index(){
//        $table = Doctors::orderBy('created_at','DESC')->get();
        $dept = Departments::orderBy('created_at','DESC')->get();
        return view('user.doctors')->with(['dept' => $dept]);
    }

    public function all_doctors(){
        $table = Doctors::orderBy('name', 'ASC')->get();
        $data=[];
        foreach ($table as $row){
            $rowData['doctorID'] = $row->doctorID;
            $rowData['name'] = $row->name;
            $rowData['imageName'] = $row->imageName;
            $rowData['department'] = $row->dept['name'];
            $data[] = $rowData;
        }

        return response()->json($data);
    }

    public function dept_wise($id){
        $table = Doctors::orderBy('name', 'ASC')->where('departmentID',$id)->get();
        $data=[];
        foreach ($table as $row){
            $rowData['doctorID'] = $row->doctorID;
            $rowData['name'] = $row->name;
            $rowData['imageName'] = $row->imageName;
            $rowData['department'] = $row->dept['name'];
            $data[] = $rowData;
        }

        return response()->json($data);
    }

    public function itemSearch(Request $request){
        $search = $request->search;
        $table = Doctors::orderBy('name', 'ASC')->search($search)->get();
        $data=[];
        foreach ($table as $row){
            $rowData['doctorID'] = $row->doctorID;
            $rowData['name'] = $row->name;
            $rowData['imageName'] = $row->imageName;
            $rowData['department'] = $row->dept['name'];
            $data[] = $rowData;
        }
        return response()->json($data);
    }

    public function doctor_details($id){
        $table = Doctors::find($id);
        return view('user.doctor_details')->with(['table' => $table]);

    }
}
