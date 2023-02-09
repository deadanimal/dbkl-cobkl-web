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
                'name' => 'P1: Admin',
                'email' => 'dbkl-cobkl-p1@pipeline.com.my',
                'password' => Hash::make('PipelineForever'),
            ],
            [
                'name' => 'P2: Staff',
                'email' => 'dbkl-cobkl-p2@pipeline.com.my',
                'password' => Hash::make('PipelineForever'),
            ],
            [
                'name' => 'P3: Public',
                'email' => 'dbkl-cobkl-p3@pipeline.com.my',
                'password' => Hash::make('PipelineForever'),
            ],
                                                                                        
        ]);
    }
}
