<?php 

class komputer{
// property
private $jenis_prosesor ="amd raizen 9 5.0ghz";
public

}

class laptop extends komputer{

    public function tampilkan_prosesor(){
        return $this->jenis_prosesor;
    }
    
}



$laptop_anto= new laptop();

$laptop_anto->pemilik="anto";



?>