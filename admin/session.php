<?php
    session_start();
    if($_SESSION['Login']==false){
        header('location: login.php');
    }
?>