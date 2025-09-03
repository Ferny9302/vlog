<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Hash;
class users_seed extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        DB::table('users')->insert([
            'name'=>'Bryan palma',
            'email'=>'fercho@hotmail.com',
            'password'=>Hash::make('123'),
            'nickname'=>'fercho',
            'img'=>'default.jpg',
            'created_at'=>date("Y-m-d h:m:s")
        ]);
        for($i=0;$i<50;$i++){
        DB::table('users')->insert([
            'name'=>'Lamine yamal'.$i,
            'email'=>'lamine'.$i.'@hotmail.com',
            'password'=>Hash::make('10'),
            'nickname'=>'cazaviejitas'.$i,
            'img'=>'default.jpg',
            'created_at'=>date("Y-m-d h:m:s")
        ]);
        }
    }
}
