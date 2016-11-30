<?php

$cnx = mysqli_connect("localhost", "root", "mysql", "ecommerce");

$id = $_GET['id'];




$req = "delete from admins WHERE id = ".$id;
$res = mysqli_query($cnx, $req);

if (mysqli_errno($cnx)) {
    echo 'error' . mysqli_error($cnx);
    die();
}

mysqli_close($cnx);

header('Location: /flat-login-form/Admin/formation/listadmin.php');

?>