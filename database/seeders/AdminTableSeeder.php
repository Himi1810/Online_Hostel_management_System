<?php

namespace Database\Seeders;
use App\Models\User;
use Illuminate\Database\Seeder;

class AdminTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        User::create([
            'name'=>'employee',
            'email'=>'employee123@gmail.com',
            'password'=>bcrypt('employee'),
            'role'=>'employee'
         ]);

         
         
        User::create([
           'name'=>'admin',
           'email'=>'admin123@gmail.com',
           'password'=>bcrypt('12345'),
           'role'=>'admin'
        ]);

        
    }

}
