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
        for ($i=0; $i<20; $i++){
            User::create([
                'name' => str::random(8),
                'lastName' => str::random(9),
                'username' => str::random(8),
                'email' => str::random(12).'@mail.com',
                'password' => Hash::make('Password'),
                'gender' => 'Female',
                'address'=>'Mumbai',
                'mobileNumber'=> mt_rand(1000000000, 9999999999),
                'dob'=>'1999-09-07',
                'deptId'=>4000,
                'roleId'=>3,
                'profilePic'=>'/public/img/image.jpg',
                //'userId'=> mt_rand(40003, 50000),
            ]);
        }

    }
}
