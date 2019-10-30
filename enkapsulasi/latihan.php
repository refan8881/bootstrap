<?php 
class restoran{
private  $bumbu ="rahasia";
protected $cara_masak ="hanya para pegawai yang mengetahui";
public $menu = "fried chiken";

public function pemasaran(){
return $this->menu;

}
public function kepo_bumbu(){

return $this->bumbu;

}

}
class kfc extends restoran{
    public function kepo_bumbu(){
        return $this->bumbu;
    }
    public function pemasaran(){

        return $this->menu;
    }
    public function cara_masak(){
        return $this->cara_masak;
    }
}

$resto = new restoran();
$res = new kfc();
echo "menu yang di sajikan di kfc adalah :".$resto->pemasaran()."<br>";
echo "bahan yang harus di persiapkan dalam pembuatan fried chiken di kfc adalah :<br>".$res->cara_masak()."<br>";
echo "bumbu yang di gunakan oleh kfc adalah :".$res->kepo_bumbu();

?>