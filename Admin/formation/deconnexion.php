<?php
session_start();
session_destroy();
header('location: /flat-login-form/index.php');
exit;
?>