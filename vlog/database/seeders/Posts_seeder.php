<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class Posts_seeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        DB::table('posts')->insert([
            "title"=>'Como cuidar las suculentas',
            "description"=>"Aprende como cuidar y como regarlas",
            "img"=>"default.jpg",
            "content"=>"contenido del post",
            "likes"=>0,
            "slug"=>"como-cuidar-suculentas",
            "user_id"=>1,
            "category_id"=>1,
            'created_at'=>date('Y-m-d h:m:s')//2025-12-12
        ]);
        DB::table('posts')->insert([
            "title"=>'La lengua de suegra',
            "description"=>"Aprende todo de la lengua de suegra",
            "img"=>"default.jpg",
            "content"=>"contenido del post",
            "likes"=>0,
            "slug"=>"como-cuidar-la-lengua-de-suegra",
            "user_id"=>1,
            "category_id"=>1,
            'created_at'=>date('Y-m-d h:m:s')//2025-12-12
        ]);
    }
}
