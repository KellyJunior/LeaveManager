<?php

namespace Database\Seeders;
use Illuminate\Database\Seeder;
use Illuminate\Support\Str;
use App\Models\User;
use Illuminate\Support\Facades\Hash;

class UsersTableDataSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        User::create([
            'name' => str::random(8),
            'lastName' => str::random(9),
            'username' => str::random(8),
            'email' => str::random(12).'@mail.com',
            'password' => Hash::make('Password'),
            'gender' => 'Male',
            'address'=>'Simla',
            'mobileNumber'=> mt_rand(0000000001, 9999999999),
            'dob'=>'1999-08-07',
            'deptId'=>4000,
            'roleId'=>rand(1,3),
            'profilePic'=>'/public/img/image.jpg',
            //'userId'=> mt_rand(40003, 50000),
        ]);
    }
}
