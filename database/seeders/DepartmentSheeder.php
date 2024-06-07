<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use DB;

class DepartmentSheeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        for($data=0; $data<=50; $data++){
            DB::table('users')->insert(
                [
                    'full_name' => 'fahmida',
                    'email' => 'fahmida@gmail.com',
                    'cell' => '01520125650',
                    'Department_name' => "Laravel",
                    'Department_code' => "001",
                    'Student_number' => "101"
                ]
            );
        }

        }
        
}
