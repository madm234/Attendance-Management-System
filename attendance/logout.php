<?php
include('header.php');
$obj =new boat();
    unset($_SESSION['QR_USER_LOGIN']);
    unset($_SESSION['USER_ROLE']);
    $obj->redirect('login.php');
?>
