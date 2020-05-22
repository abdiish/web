<?php require '../res/php/app_top_admin.php';?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Administrador</title>
</head>
<body>
    <?php 
        if(isset($_SESSION['admin'])){
            require "../include/nav/main_nav_admin.php";
        }
    ?>
    <?php
        #si no hay vista seleccionada mostrar publicaciones(raiz) 
        if(!isset($_SESSION['admin'])){
            #Contiene el formulario para iniciar sesion
            require '../include/admin/login_admin.php';

        }elseif(isset($_SESSION['admin']) && !isset($_GET['section'])){
            require '../include/admin/main.php';
        }elseif(isset($_SESSION['admin']) && isset($_GET['section']) && $_GET['section'] == "posts"){
            require '../include/admin/posts.php';
        }elseif(isset($_SESSION['admin']) && isset($_GET['section']) && $_GET['section'] == "categories"){
            require '../include/admin/categories.php';
        }
    ?>
<script src="../res/js/jquery.js"></script> 
<script src="../res/js/admin.js"></script>   
</body>
</html>