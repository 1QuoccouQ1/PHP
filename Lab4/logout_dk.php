<?php
    session_start();
    session_destroy();
    header("Location: register.php");  //redirect to login page after logout
    exit();

?>