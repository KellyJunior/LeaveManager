<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;
use Illuminate\Support\Facades\DB;
class AlterTableUsers extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {

        Schema::table('users', function (Blueprint $table) {
            $table->string('lastName');
            $table->string('username')->unique();
            $table->string('gender');
            $table->string('address');
            $table->string('mobileNumber')->unique();
            $table->date('dob');
            //$table->string('deptId');
            $table->unsignedInteger('deptId')->index();
            //$table->foreign('deptId')->references('deptId')->on('departments');
            $table->unsignedInteger('roleId')->index();
           //$table->foreign('roleId')->references('id')->on('roles');
            $table->string('profilePic');
            $userId = DB::table('users')->select("*", DB::raw("CONCAT(users.deptId,' ',users.roleId,'users.id') AS fullId"));
            //$table->string('userId');
        });

    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        //
    }
}
