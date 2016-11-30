<?php
$id=$_POST['id'];
$nom=$_POST['name'];
$description=$_POST['description'];
$price=$_POST['price'];
$date=$_POST['date'];
$category=$_POST['category'];
$image=$_POST['image'];
$image2=$_POST['image2'];
$cnx=mysqli_connect("localhost","root","mysql","ecommerce");
$req="insert into products values('$id','$nom','$description','$price','$date','$category','$image','$image2')";
mysqli_query($cnx,$req);

mysqli_close($cnx);
header('Location: /flat-login-form/Admin/formation/list.php');
?>