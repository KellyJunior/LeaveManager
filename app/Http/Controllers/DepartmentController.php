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
        $webGraph=DB::table('users')->where('deptId',4000)->get()->count();
        $webMen=DB::table('users')
                ->where('deptId',4000)
                ->where('gender','Male')
                ->get()->count();
        $percentageValue=$webMen/$webGraph;

        $webWomen=DB::table('users')
                    ->where('deptId',4000)
                    ->where('gender','Female')
                    ->get()->count();
        return view('admin.webDevDetails',['webMen'=>$webMen, 'webWomen'=>$webWomen]);
    }
    public function mobileDevDetails(){
        $webGraph=DB::table('users')->where('deptId',5000)->get()->count();
        $mobMen=DB::table('users')
                ->where('deptId',5000)
                ->where('gender','Male')
                ->get()->count();


        $mobWomen=DB::table('users')
                    ->where('deptId',5000)
                    ->where('gender','Female')
                    ->get()->count();
        return View('admin.mobileDevDetails', ['mobMen'=>$mobMen, 'mobWomen'=>$mobWomen]);
    }

    public function managementDetails(){
        $webGraph=DB::table('users')->where('deptId',6000)->get()->count();
        $managMen=DB::table('users')
                ->where('deptId',6000)
                ->where('gender','Male')
                ->get()->count();


        $managWomen=DB::table('users')
                    ->where('deptId',6000)
                    ->where('gender','Female')
                    ->get()->count();
        return View('admin.managementGraph', ['managMen'=>$managMen, 'managWomen'=>$managWomen]);
    }
    public function aiDepDetails(){
        $webGraph=DB::table('users')->where('deptId',7000)->get()->count();
        $aiMen=DB::table('users')
                ->where('deptId',7000)
                ->where('gender','Male')
                ->get()->count();


        $aiWomen=DB::table('users')
                    ->where('deptId',7000)
                    ->where('gender','Female')
                    ->get()->count();
        return View('admin.aiDepGraph', ['aiMen'=>$aiMen, 'aiWomen'=>$aiWomen]);
    }
}

