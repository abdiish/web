<?php
require "functions.php";
$user = new User_Actions();

if (!isset($_GET['section'])) {
    # Obtener publicaciones
    $posts = $user->getRecentPosts();

    #echo "<pre>",print_r($posts),"</pre>";
    #exit();
}
?>