<?php

use Illuminate\Database\Seeder;
use App\User;
use App\Role;

class UserTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $role_student = Role::where('name', 'student')->first();
        $role_advisor  = Role::where('name', 'advisor')->first();
        $role_admin  = Role::where('name', 'admin')->first();

        $student = new User();
        $student->name = 'Student Name';
        $student->email = 'student@example.com';
        $student->password = bcrypt('secret');
        $student->save();
        $student->roles()->attach($role_student);

        $advisor = new User();
        $advisor->name = 'Advisor Name';
        $advisor->email = 'advisor@example.com';
        $advisor->password = bcrypt('secret');
        $advisor->save();
        $advisor->roles()->attach($role_advisor);

        $admin = new User();
        $admin->name = 'Admin Name';
        $admin->email = 'admin@example.com';
        $admin->password = bcrypt('secret');
        $admin->save();
        $admin->roles()->attach($role_admin);
    }
}
