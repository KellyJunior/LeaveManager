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
}
