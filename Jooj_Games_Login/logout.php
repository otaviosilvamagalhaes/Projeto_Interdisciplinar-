<?php
    session_start();

    unset(
        $_SESSION['id'],
        $_SESSION['nome'],
        $_SESSION['email'],
        $_SESSION['nivel']
    );

    header('Location:../NF/');
?>