<?php
    include('login.php');
    session_destroy();
    echo "logout............";
    header("refresh:2;url=login.php");
?>