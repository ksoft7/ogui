<?php

    session_start();
    session_destroy();
    exit(header("location: login.php"));

?>