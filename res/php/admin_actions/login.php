<?php 
require '../functions.php';

$admin = new Admin_Actions();

$login = $admin->logIn($_POST['email'], $_POST['pass']);
echo print_r($login);

if ($login) {
    # Iniciar sesion como Admiistrador...
    $_SESSION['admin'] = $_POST['email'];
    echo "true";
} else {
    # Las credenciales no coinciden...
    echo "false";
}
    
?>