<?php

require_once 'App/init.php';
/*
$produk1 = new Komik("Naruto", "Masashi Kishimoto", "Shonen Jump", 30000, 100);
$produk2 = new Game("Uncharted", "Neil Druckmann", "Sony Computer", 250000, 50);
$cetakProduk = new CetakInfoProduk();
$cetakProduk->tambahProduk( $produk1 );
$cetakProduk->tambahProduk( $produk2 );
echo $cetakProduk->cetak();
// $tes = new Produk();

echo "<hr>";*/
use App\Service\User as ServiceUser; //untuk menggunakan mnamespace
use App\Produk\User as ProdukUser; //untuk menggunakan mnamespace
new ServiceUser();
echo "<br>";
new ProdukUser();
