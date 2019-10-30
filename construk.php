<?php 
class siswa{

    public function __destruct(){
        echo "<br> ini adalah destruktor";
    }
    public function hallo(){
        return "<br> hello php";
    }
    public function __construct(){
        echo "ini adalah construct";
    }
}
$hello = new siswa();
echo $hello->hallo();
?>