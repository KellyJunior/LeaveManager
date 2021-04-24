<?php

namespace App\Http\Controllers;

use App\Models\Leave;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Storage;
use Illuminate\Support\Facades\Validator;
use Illuminate\Support\Facades\File;
use Illuminate\Support\Facades\File as FacadesFile;
use DateTime;
class LeaveController extends Controller
{
    public function requestLeave(){
        $departments= \App\Models\Department::all();
        return view('admin.requestLeave',['departments'=>$departments]);
    }
    public function confirmation(Request $request){
        $leave= new Leave;
        Validator::make($request->all(),['proofDoc'=>"required|file|image|mimes:jpg,pdf,png,jpeg|max:5000 "])->validate();
        $ext= $request->file('proofDoc')->getClientOriginalExtension(); //jpg ,png..
        //$stringImageReFormat= str_replace(" ","",$request->input('postAvatar'));
        //$imageName= $stringImageReFormat.".".$ext;  //CV.png
        //$imageName = time().'.'.$request->image->extension();
        $imageName = time().'.'.$ext;
        //$imageEncoded=File::get($request->image);
        $imageEncoded=File::get($request->proofDoc);
        Storage::disk('local')->put('public/'.$imageName,$imageEncoded);
        $url= Storage::url($imageName);
        $senderMail=$leave->email=$request->input('email');
        $departmentName=$leave->departmentName=$request->input('departmentName');
        $leaveType=$leave->leaveType=$request->input('leaveType');
        $description=$leave->description=$request->input('description');
        $proofDoc=$leave->proofDoc=$imageName;
        $date= new DateTime();
        $c=$date->format('Y-m-d H:i:s');
        $u=$date->format('Y-m-d H:i:s');
        /**Getting from the user table the name of the employee requesting for the leave */
        $name = DB::select('select *from users where email=?',[$senderMail]);
        return view('admin.confirmRequest',['senderMail'=>$senderMail,'departmentName'=>$departmentName, 'leaveType'=>$leaveType
        ,'description'=>$description, 'proofDoc'=>$proofDoc,'created_at'=>$c,'updated_at'=>$u, 'name'=>$name]);
    }
    public function saveLeave(Request $request){
        $leave= new Leave;
        Validator::make($request->all(),['proofDoc'=>"required|file|image|mimes:jpg,pdf,png,jpeg|max:5000 "])->validate();
        $ext= $request->file('proofDoc')->getClientOriginalExtension(); //jpg ,png..
        //$stringImageReFormat= str_replace(" ","",$request->input('postAvatar'));
        //$imageName= $stringImageReFormat.".".$ext;  //CV.png
        //$imageName = time().'.'.$request->image->extension();
        $imageName = time().'.'.$ext;
        //$imageEncoded=File::get($request->image);
        $imageEncoded=File::get($request->proofDoc);
        Storage::disk('local')->put('public/'.$imageName,$imageEncoded);
        $url= Storage::url($imageName);
        $leave->email=$request->input('email');
        $leave->departmentName=$request->input('departmentName');
        $leave->leaveType=$request->input('leaveType');
        $leave->description=$request->input('description');
        $leave->proofDoc=$imageName;
        $date= new DateTime();
        $c=$date->format('Y-m-d H:i:s');
        $u=$date->format('Y-m-d H:i:s');
        /**
         * @Create a confirmation view before saving the user request
         */
        //return view('confirm-request',[]);
        DB::insert('insert into leaves
        ( email,departmentName,leaveType,description,proofDoc, created_at,updated_at)
        values (?, ?,?,?,?,?,?)', [$leave->email,$leave->departmentName,$leave->leaveType,$leave->description
        ,$leave->proofDoc,$c,$u]);
        //$leave->save();
    }
}
