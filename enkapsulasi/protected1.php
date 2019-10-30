<?php 
class lapto{
protected $pemilik;

protected function hidupkan_laptop(){

    return "hidupkan laptop";
}


}
//buat objek dari class laptop (instansiasi)
$laptop_anto = new laptop();

//set protected property akan menghasilkan error
$laptop_anto->pemilik="anto";
//fatal error; cannot accees protected property laptop

//tampilkan protected property akan menghasilkan error
echo $laptop_anto->pemilik;
//fatal error : cannot access protected property

// jalankan protected method akan
echo $laptop_anto->hidupkan_laptop();



?>