<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class PostsTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $posts=[
            ['title'=>'Tips cepat Kaya','content'=>'lorem ipsum'],
            ['title'=>'Haruskah menunda Belajar?','content'=>'lorem ipsum'],
            ['title'=>'Membangun visi misi kesuksesan','content'=>'lorem ipsum']
        ];

        // Masukkan Data Ke database

        DB::table('posts')->insert($posts);
    }
}
