<?php
session_start();
if(!isset($_SESSION['logado'])) {
    header('Location: ../spl/inscreverse.php');
    exit();
}
?>