<?php 
// buat class laptop
class laptop{
    public $pemilik;
    //buat public menthod
    public function hidupkan_laptop(){
        return "hidupkan laptop";
    }
}

//buat objek dari class laptop (innstalasi)
$laptop_anto = new laptop();
//set property
$laptop_anto->pemilik="anto";

//tampilkan property
echo $laptop_anto->pemilik;//anto

//tampilkan method
echo $laptop_anto->hidupkan_laptop();//"hidupkan laptop"


?>