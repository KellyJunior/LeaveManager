<?php

namespace App\Http\Controllers;

use App\Models\Department;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class DepartmentController extends Controller
{
    public function getDepartments(){
        //$departments= Department::all();
         $departments= DB::table('users')
        ->join('departments','users.deptId','=','departments.deptId')
        ->where('users.roleId',2)
        ->get();
        //Total Number of employees
        $totalEmplWeb= DB::table('users')->where('deptId',4000)->get()->count();
        $totalEmplMob= DB::table('users')->where('deptId',5000)->get()->count();
        $totalEmplManag= DB::table('users')->where('deptId',6000)->get()->count();
        $totalEmplAi= DB::table('users')->where('deptId',7000)->get()->count();
//echo($departments);
        return view('admin.allDepartment',['departments'=>$departments, 'totalEmplWeb'=>$totalEmplWeb, 'totalEmplMob'=>$totalEmplMob,
        'totalEmplManag'=>$totalEmplManag, 'totalEmplAi'=>$totalEmplAi]);
    }


    public function webDevDetails(){
        return view('admin.webDevDetails');
    }
}
