<?php

namespace App\Http\Controllers;
use Illuminate\Support\Facades\Auth;
use Illuminate\Http\Request;
use User;
use Illuminate\Support\Facades\DB;

class UserController extends Controller
{


    public function getEmployees(){
        //$allEmployees = DB::SELECT('select *from users where roleId=?',3);
        $user = Auth::user();
        $allEmployees=DB::table('users')->where('roleId',3)->get();
        return view('admin.allEmployees',['allEmployees'=>$allEmployees, 'user'=>$user]);
    }
    public function getHod(){
        $hod= DB::table('users')
        ->join('departments','users.deptId','=','departments.deptId')
        ->where('users.roleId',2)
        ->get();
        return view('admin.allHod',['hod'=>$hod]);
    }
    public function getCurrentUserDetails(){
        $user = Auth::user();
        //return $user;
        return view('admin.header',['user'=>$user]);
    }

    //define the connected user profile
    public function getCurrentUserProfile(){
        $user = Auth::user();
        return view('admin.MyProfile',['user'=>$user]);
    }
    public function totalEmployees(){
        $user = Auth::user();
        $allEmployees=DB::table('users')->where('roleId',3)->get()->count();
        $hods=DB::table('users')->where('roleId',2)->get()->count();
        return view('admin.graphAnalytics',['allEmployees'=>$allEmployees, 'hods'=>$hods]);
    }
}


