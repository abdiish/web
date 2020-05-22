<?php require 'res/php/app_top.php';?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="res/css/main.css">
    <!--link rel="stylesheet" href="res/css/font-awesome.min.css"-->
    <link rel="stylesheet" href="font-awesome/css/font-awesome.min.css">
    <link rel="stylesheet" href="res/css/slick/slick.css">
    <link rel="stylesheet" href="res/css/slick/slick-theme.css">
    <title>Inicio - IEIMC</title>
</head>
<body>
    <?php require 'include/header.php';?>
    <main>
        <?php
            #si no hay vista seleccionada mostrar publicaciones(raiz) 
            if (!isset($_GET['section'])) {
                # code...
                require 'include/review.php';
                require 'include/cards.php';
                require 'include/skew.php';
                require 'include/cms.php';
                require 'include/contacto.php';
                require 'include/footer.php';
            } 
        ?>
    </main>
    <script src="res/js/jquery.js"></script>
    <script src="res/css/slick/slick.min.js"></script>
    <script src="res/js/slick.js"></script>
    <script src="res/js/header.js"></script>
    <script src="res/js/admin.js"></script>
    <script src="res/js/maps.js"></script>
</body>
</html> 