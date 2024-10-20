<?php

require_once 'App/init.php';

$produk1 = new Komik("Hunter X Hunter", "Togashi Sensei", "Shonen Jump", 250000, 100);
$produk2 = new Game("One Piece", "Oda Sensei", "Toe Animation", 300000,  50);

$cetakProduk = new CetakInfoProduk();
$cetakProduk->tambahProduk( $produk1 );  
$cetakProduk->tambahProduk( $produk2 );
echo $cetakProduk->cetak();

 echo "<hr>";

 new Coba();