<?php
$id=$_POST['id'];
$prenom=$_POST['first_name'];
$nom=$_POST['last_name'];
$email=$_POST['email'];
$password=$_POST['password'];
$cnx=mysqli_connect("localhost","root","mysql","ecommerce");
$req="insert into admins values('$id','$prenom','$nom','$email','$password')";
mysqli_query($cnx,$req);
header('Location: /flat-login-form/Admin/formation/listadmin.php');
mysqli_close($cnx);

?>