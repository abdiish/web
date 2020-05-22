<?php
require '../functions.php';
$obj = new Admin_Actions();//Se crea objeto para acceder a los metodos
$save = $obj->saveCategory($_POST['category']);
echo  $save; 
?>