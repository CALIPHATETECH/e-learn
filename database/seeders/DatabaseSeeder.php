<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\User;
use App\Models\Department;
use Illuminate\Support\Facades\Hash;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {
         User::create([
            'name' => 'Admin',
            'email' => 'admin@elearn.com',
            'password' => Hash::make('admin'),
            'role' => 'Admin'
        ]);
        
        $departments = ['Mathematics', 'Statistics'];
        foreach($departments as $department){
            Department::create(['name'=>$department]);
        }
       
    }
}
