<?php

namespace Database\Seeders;
use Illuminate\Support\Facades\DB;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class AdminSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        //
         // Use DB::table(); //for inserting data directly:

        DB::table('admins')->updateOrInsert(['email'=> 'admin@localhost'],
            [
                'name' => 'admin',
                
                'password'=>bcrypt('123456789'),
                
            ],
            // Add more data as needed
        );

        // OR, use factories to create fake data:

        // YourModel::factory()->count(10)->create(); // Creates 10 instances of YourModel with fake data
    }
    
}
