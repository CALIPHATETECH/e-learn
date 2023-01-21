<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\User;
use App\Models\Programme;
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
        return User::create([
            'name' => 'Admin',
            'email' => 'admin@elearn.com',
            'password' => Hash::make('admin'),
            'role' => 'Admin'
        ]);
        
        $programmes = ['Higher National Diploma In Computer Science', 'National Diploma In Computer Science'];
        foreach(programmes as $programme){
            Programme::create(['name'=>$programme]);
        }
       
    }
}
