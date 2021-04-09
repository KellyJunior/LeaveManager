<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use User;
use Illuminate\Support\Facades\DB;

class UserController extends Controller
{
    public function getEmployees(){
        //$allEmployees = DB::SELECT('select *from users where roleId=?',3);
        $allEmployees=DB::table('users')->where('roleId',3)->get();
        return view('admin.allEmployees',['allEmployees'=>$allEmployees]);
    }
    public function getHod(){
        $hod= DB::table('users')
        ->join('departments','users.deptId','=','departments.deptId')
        ->where('users.roleId',2)
        ->get();
        return view('admin.allHod',['hod'=>$hod]);
    }
    /* Get the total number of employees in web development */
    public function webDevDetails(){
        $webGraph=DB::table('users')->where('deptId',4000)->get()->count();
        $webMen=DB::table('users')
                ->where('deptId',4000)
                ->where('gender','Male')
                ->get()->count();
        $percentageValue=$webMen/$webGraph;
        return view('admin.adminHome',['webMen'=>$webMen]);
    }
}
