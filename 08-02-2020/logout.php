<?php
session_start();
unset($_SESSION['userid']);
session_destroy();
header("Location: home.php");
?>