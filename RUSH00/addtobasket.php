<?php
    session_start();
    print_r($_GET);

    if (!isset($_SESSION["basket"]))
        $_SESSION['basket'] = array('table' =>$_GET['table'], 'index' => 0);
    else
        $_SESSION['basket'][] = array('table' =>$_GET['table'], 'index' => 0);
?>