<?php 

// define('NAMA', 'Geni');
// echo NAMA;

// echo "<br>";

// const UMUR = 21;
// echo UMUR;

// class COba {
//     const NAMA = 'Geni';
// }

// echo Coba::NAMA;
 
// echo __LINE__;




// function coba(){
//     return __FUNCTION__;
// }

// echo coba();

class Coba {
    public $kelas = __CLASS__;
}

$obj = new Coba;
echo $obj->kelas; 



?>