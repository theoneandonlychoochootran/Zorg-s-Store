<?php
    include 'navigation.php';
	include 'footer.php';
    session_destroy();
    header('location:index.php');
?>