<?php

class Produk {
    public $judul,
           $penulis, 
           $penerbit, 
           $harga,
           $jmlHalaman, 
           $waktuMain; 

    public function __construct( $judul = "judul", $penulis = "penulis", $penerbit = "penerbit", $harga = 0, $jmlHalaman = 0, $waktuMain = 0,) {
        $this->judul = $judul;    
        $this->penulis = $penulis;    
        $this->penerbit = $penerbit;    
        $this->harga = $harga;
        $this->jmlHalaman = $jmlHalaman;
        $this->waktuMain = $waktuMain;
    }       

    public function getLabel(){
        return "$this->penulis, $this->penerbit";
    }

    public function getInfoProduk(){
        $str = "{$this->judul} | {$this->getLabel()} (Rp. {$this->harga}) ";    

        return $str;
    }

}


class Komik extends produk {
    public function getInfoProduk(){
        $str = "Komik : {$this->judul} | {$this->getLabel()} (Rp. {$this->harga}) - {$this->jmlHalaman} Halaman. ";
        return $str;
    } 
}


class Game extends produk {
    public function getInfoProduk(){
        $str = " Game : {$this->judul} | {$this->getLabel()} (Rp.  {$this->harga}) ~ {$this->waktuMain} Jam.";
        return $str; 
     }
}






class CetakInfoProduk {
    public function cetak( Produk $produk ) {
        $str = "{$produk->judul} | {$produk->getLabel()}, (Rp. {$produk->harga})";
        return $str;
    }
}



$produk1 = new Komik("Hunter X Hunter", "Togashi Sensei", "Shonen Jump", 250000, 100, 0);
$produk2 = new Game("One Piece", "Oda Sensei", "Toe Animation", 300000, 0, 50);

echo $produk1->getInfoProduk();
echo "<br>";
echo $produk2->getInfoProduk();








