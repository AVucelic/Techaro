<?php 
$mysqli = new mysqli('localhost','lvl7558','Genuflection9+afoul','lvl7558');
if(mysqli_connect_errno()){
    echo 'Connection failed' . mysqli_connect_errno();
    exit();
}else{
    echo 'Conection made succesfully';
}


?>