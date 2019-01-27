<?php
    session_start();
    $prophet = $_GET['prophet'];
    unset($_SESSION[$prophet]);
?>