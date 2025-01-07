<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class BarangsTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $barangs=[
            ['nama_barang'=>'Sepatu','merk'=>'converse','harga'=>400000],
            ['nama_barang'=>'Tas','merk'=>'mossdoom','harga'=>200000],
            ['nama_barang'=>'Jam tangan','merk'=>'casio','harga'=>300000],
            ['nama_barang'=>'Kacamata','merk'=>'lion','harga'=>100000],
            ['nama_barang'=>'Laptop','merk'=>'asus','harga'=>5000000],

        ];

        // Masukkan Data Ke database

        DB::table('barangs')->insert($barangs);
    }
}
