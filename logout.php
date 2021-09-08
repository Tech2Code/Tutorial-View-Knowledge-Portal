<?php
session_start();
unset($_SESSION['userid']);
unset($_SESSION['auth']);
header("location:index.php");
?>