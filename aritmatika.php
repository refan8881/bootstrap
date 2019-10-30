<?php
class aritmatika{

    public $bil;
    public $bil1;




    public function tambah($a, $b){
        $this->bil =$a;
        $this->bil1=$b;
        return " pertambahan $a + $b = " . ($a + $b);
    }
     public function pengurangan($a , $b ){
        $this->bil = $a;
        $this->bil1 =$b;

        return " pengurangan $a - $b =". ($a - $b);
    }
     public function perkalian($a, $b){
         $this->bil = $a;
        $this->bil1 =$b;


        return " perkalian $a x $b =".($a * $b);
    }
     public function pembagian($a,$b){
         $this->bil = $a;
        $this->bil1 =$b;


        return " pembagian $a : $b =".($a / $b);
    }

}

$aritmatika1 = new aritmatika();
echo "<br>";
echo $aritmatika1->tambah(2,3);
echo "<br>";
echo $aritmatika1->pengurangan(6,3);
echo "<br>";
echo $aritmatika1->perkalian(2,2);
echo "<br>";
echo $aritmatika1->pembagian(100,5);


?>