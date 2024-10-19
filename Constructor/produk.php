<?php

class Produk {
    public $judul,
           $penulis, 
           $penerbit, 
           $harga; 

    public function __construct( $judul = "judul", $penulis = "penulis", $penerbit = "penerbit", $harga = 0 ) {
        $this->judul = $judul;    
        $this->penulis = $penulis;    
        $this->penerbit = $penerbit;    
        $this->harga = $harga;    
    }       

    public function getLabel(){
        return "$this->penulis, $this->penerbit";
    }

}

$produk1 = new Produk("Killua", "Togashi Sensei", "Shonen Jump", 250000);
$produk2 = new Produk("One Piece", "Oda Sensei", "Toe Animation", 300000);
$produk3 = NEW Produk("Genei Ryoudan");
 

$produk4 = new Produk();
$produk4->judul = "One Piece";
$produk4->penulis = "Oda Sensei";
$produk4->penerbit = "Toe Animatiom ";
$produk4->harga = 250000;

echo "Komik : " . $produk1->getLabel();
echo "<br>";
echo "Game : " . $produk2->getLabel();