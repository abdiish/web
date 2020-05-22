<?php
require "functions.php";
$admin = new Admin_Actions();

if (isset($_SESSION['admin']) && 
    isset($_GET['section']) && 
    isset($_GET['section']) == "posts") {
    # Obtener las categorias de la base de datos...
    $categories = $admin->getCategories();
}

if (isset($_SESSION['admin']) && 
    isset($_GET['section']) && 
    isset($_GET['section']) == "categories") {
    # Obtener las categorias de la base de datos...
    $categories = $admin->getCategories();
}
?>