<?php

namespace App\Http\Controllers\Auth;

use App\Http\Controllers\Controller;
use App\Providers\RouteServiceProvider;
use App\Models\User;
use Illuminate\Foundation\Auth\RegistersUsers;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Validator;
use Illuminate\Support\Facades\File;
use Illuminate\Support\Facades\File as FacadesFile;
use Illuminate\Support\Facades\Storage;
use Symfony\Component\Console\Input\Input;
class RegisterController extends Controller
{
    /*
    |--------------------------------------------------------------------------
    | Register Controller
    |--------------------------------------------------------------------------
    |
    | This controller handles the registration of new users as well as their
    | validation and creation. By default this controller uses a trait to
    | provide this functionality without requiring any additional code.
    |
    */

    use RegistersUsers;

    /**
     * Where to redirect users after registration.
     *
     * @var string
     */
    protected $redirectTo = RouteServiceProvider::HOME;

    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('guest');
    }

    /**
     * Get a validator for an incoming registration request.
     *
     * @param  array  $data
     * @return \Illuminate\Contracts\Validation\Validator
     */
    protected function validator(array $data)
    {
        return Validator::make($data, [
            'name' => ['required', 'string', 'max:255'],
            'email' => ['required', 'string', 'email', 'max:255', 'unique:users'],
            'password' => ['required', 'string', 'min:8', 'confirmed'],
            'mobileNumber'=> ['required','digits:10'],
            'profilePic'=>['required','file','image','mimes:jpg,psd,ai,png,jpeg|max:5000' ]

        ]);
    }

    /**
     * Create a new user instance after a valid registration.
     *
     * @param  array  $data
     * @return \App\Models\User
     */
    protected function create(array $data)
    {
        //Validator::make($data,['profilePic'=>"required|file|image|mimes:jpg,psd,ai,png,jpeg|max:5000 "])->validate(),
        $ext= $data['profilePic']->getClientOriginalExtension();
        $imageName = time().'.'.$ext;
        $imageEncoded=File::get($data['profilePic']);
        Storage::disk('local')->put('public/'.$imageName,$imageEncoded);
        $url= Storage::url($imageName);

        return User::create([
            'name' => $data['name'],
            'email' => $data['email'],
            'password' =>Hash::make($data['password']),
            'lastName' => $data['lastName'],
            'username' => $data['username'],
            'gender' => $data['gender'],
            'address' => $data['address'],
            'mobileNumber' => $data['mobileNumber'],
            'dob' => $data['dob'],
            'deptId' => $data['deptId'],
            'roleId' => $data['roleId'],
            $ext= $data['profilePic']->getClientOriginalExtension(),
            $imageName = time().'.'.$ext,
            $imageEncoded=File::get($data['profilePic']),
            Storage::disk('local')->put('public/'.$imageName,$imageEncoded),
            'profilePic'=>$imageName,
        ]);
    }
}
