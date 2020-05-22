<?php
require '../functions.php';
$obj = new Admin_Actions();//Se crea objeto para acceder a los metodos
$delete = $obj->deleteCategory($_POST['category_id']);
echo  $delete; 
?>