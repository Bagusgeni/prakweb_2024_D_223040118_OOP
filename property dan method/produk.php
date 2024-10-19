<?php

class Produk {
    public $judul = "judul",
           $penulis ="penulis", 
           $penerbit ="penerbit", 
           $harga = 0; 

    public function getLabel(){
        return "$this->penulis, $this->penerbit";
    }
}

// $produk1 = new Produk();
// $produk1->judul = "Naruto";
// var_dump($produk1);

// $produk2 = new Produk();
// $produk2->judul = "Uncharted";
// $produk2->tambahProperty = "hahaha";
// var_dump($produk2);

$produk3 = new Produk();
$produk3->judul = "Hunter X Hunter";
$produk3->penulis = "Togashi Sensei";
$produk3->penerbit = "Shonen Jump ";
$produk3->harga = 300000;
 

$produk4 = new Produk();
$produk4->judul = "One Piece";
$produk4->penulis = "Oda Sensei";
$produk4->penerbit = "Toe Animatiom ";
$produk4->harga = 250000;

echo "Komik : " . $produk3->getLabel();
echo "<br>";
echo "Game : " . $produk4->getLabel();