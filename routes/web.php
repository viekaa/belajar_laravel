<?php

use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

Route::get('/', function () {
    return view('welcome');
});
Route::get('/home', function () {
    return 'Selamat datang di halaman HOME';
});


// ROUTE PARAMETER
Route::get('/tes/{nama2}/{tempatlahir}/{jk}/{agama}/{alamat}',function($nama,$tempat_lahir,
$jk,$agama,$alamat){
    return "Nama :".$nama."<br>".
           "Tempat Lahir :".$tempat_lahir."<br>".
           "Jenis Kelamin :".$jk."<br>".
           "Agama :".$agama."<br>".
           "Alamat :".$alamat."<br>";
});

Route::get('/hitung/{a}/{b}',function($bilangan1,$bilangan2){
    return "Bilangan 1 :".$bilangan1."<br>".
    "Bilangan 2 :".$bilangan2."<br>".
    "Hasil :".$hasil= $bilangan1 + $bilangan2;
});

// Latihan
Route::get('/latihan/{a}/{b}/{c}/{d}/{e}/{f}',
function($nama,$telepon,$jenis,$barang,$jumlah,$bayar){

        // HP

    if($jenis=="Handphone") {
        if($barang=="Poco") {
            $harga = 3000000;
            $total = $harga * $jumlah;
        }elseif($barang=="Samsung") {
            $harga = 5000000;
            $total = $harga * $jumlah;
        }elseif($barang=="Iphone") {
            $harga = 15000000;
            $total = $harga * $jumlah;
        }else{
            echo "-";
        }
        // Laptop
    }elseif ($jenis=="Laptop") {
        if($barang=="Lenovo") {
            $harga = 4000000;
            $total = $harga * $jumlah;

        }elseif($barang=="Acer") {
            $harga = 8000000;
            $total = $harga * $jumlah;
        }elseif($barang=="Macbook") {
            $harga = 20000000;
            $total = $harga * $jumlah;
        }else{
            echo "-";
        }
        // TV
    }elseif ($jenis=="TV") {
        if($barang=="Toshiba") {
            $harga = 5000000;
            $total = $harga * $jumlah;

        }elseif($barang=="Samsung") {
            $harga = 8000000;
            $total = $harga * $jumlah;
        }elseif($barang=="LG") {
            $harga = 10000000;
            $total = $harga * $jumlah;
        }else{
            echo "-";
        }
    }else{
        echo "tidak ada barang yang dipilih";
    }

    // Pembayaran
    if ($bayar=="Transfer") {
        $potongan = 50000;
    }elseif ($bayar=="Cash") {
        $potongan = 0;
    }else {
      echo "Belum melakukan pembayaran";
    }

    // Cashback
    if ($total >=10000000) {
        $cashback = 500000;
    }else {
        $cashback = 0;
    }

return "Nama Pembeli :".$nama."<br>".
       "Telepon :".$telepon."<br>".
       "----------------------------<br>".
       "Jenis Barang :".$jenis."<br>".
       "Nama Barang :".$barang."<br>".
       "Harga :".$harga."<br>".
       "Jumlah :".$jumlah."<br>".
       "----------------------------<br>".
       "Total :".$total = $harga * $jumlah."<br>".
       "Cashback :" .$cashback."<br>".
       "Pembayaran :".$bayar."<br>".
       "Potongan :".$potongan."<br>".
       "----------------------------<br>".
       "Total Pembayaran :".$hasil = $total - $cashback -$potongan
       ;
});

Route::get('/siswa',function(){
$data_siswa =['vika','isma','eva'];

return view('tampil',compact('data_siswa'));
});