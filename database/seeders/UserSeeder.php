<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Hash;

class UserSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        //

        DB::table('users')->insert([
            [
                'name' => 'admin',
                // 'email' => 'dbkl-cobkl-p1@pipeline.com.my',
                'ic' => '002023140001',
                'password' => Hash::make('PipelineForever'),
            ],
            [
                'name' => 'staff',
                // 'email' => 'dbkl-cobkl-p2@pipeline.com.my',
                'ic' => '002023140002',
                'password' => Hash::make('PipelineForever'),
            ],
          
                                                                                        
        ]);
    }
}
