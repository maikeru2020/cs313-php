<?php
    session_start();
    $prophet = $_GET['prophet'];
    if (isset($_SESSION[$prophet])) {
        $_SESSION[$prophet]++;
    } else {
        $_SESSION[$prophet] = 1;
    }

    $numItems = 0;
    foreach ($_SESSION as $value) {
        $numItems += $value;
    }

    echo $numItems;
?>
