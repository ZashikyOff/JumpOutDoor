<?php
    session_name("parkour");
    session_start();
    session_destroy();
    header("Location: ../index.php");
