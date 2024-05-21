<?php

namespace Database\Seeders;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class SettingSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        //
         // Use DB::table() for inserting data directly:

        // DB::table('your_table_name')->insert([
        //     [
        //         'column1' => 'value1',
        //         'column2' => 'value2',
        //         // ...
        //     ],
        //     // Add more data as needed
        // ]);
         Db::table('settings')->updateOrInsert(['email'=>'naglaa@dgital.com'],[
            'name'=>'DGital',
            'phone'=>'1234567',
            'address'=>'qena',
         ]);
        // OR, use factories to create fake data:

        // YourModel::factory()->count(10)->create(); // Creates 10 instances of YourModel with fake data
    }
}

