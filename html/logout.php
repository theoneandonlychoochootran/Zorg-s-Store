<?php
    include 'navigation/navigation.php';
    session_destroy();
    header('location: index.php');
?>