<?php
if((!empty($_POST['email']))&&(!empty($_POST['password']))){
$email=$_POST['email'];
$password=$_POST['password'];
$cnx=mysqli_connect("localhost","root","mysql","ecommerce");
$req="select email,password from admins";
$res=mysqli_query($cnx,$req);
while($e=mysqli_fetch_assoc($res))
{
  $mail=$e['email'];
  $pass=$e['password'];
  if($mail==$email && $pass==$password)
  {
    header("Location: Admin/formation/list.php");
    mysqli_close($cnx);
  }
  else{
    header("Location: index.php");
  }

}
}


?>


<!DOCTYPE html>
<html >
  <head>
    <meta charset="UTF-8">
    <title>Flat Login Form</title>
    
    
    <link rel="stylesheet" href="css/reset.css">

    <link rel='stylesheet prefetch' href='http://fonts.googleapis.com/css?family=Roboto:400,100,300,500,700,900'>
<link rel='stylesheet prefetch' href='http://fonts.googleapis.com/css?family=Montserrat:400,700'>
<link rel='stylesheet prefetch' href='https://maxcdn.bootstrapcdn.com/font-awesome/4.3.0/css/font-awesome.min.css'>

        <link rel="stylesheet" href="css/style.css">

    
    
    
  </head>

  <body>

    
<div class="container">
  <div class="info">
    <h1>The BOX Login Admins </h1>
  </div>
</div>
<div class="form">
  <div class="thumbnail"><img src="logo-center.png"/></div>

  <form class="login-form" action="#" method="post">
    <input type="text" placeholder="email" name="email"/>
    <input type="password" placeholder="Mot de passe" name="password"/>
    <button>login</button>

  </form>
</div>
<video id="video" autoplay="autoplay" loop="loop" poster="polina.jpg">
  <source src="http://andytran.me/A%20peaceful%20nature%20timelapse%20video.mp4" type="video/mp4"/>
</video>
    <script src='http://cdnjs.cloudflare.com/ajax/libs/jquery/2.1.3/jquery.min.js'></script>

        <script src="js/index.js"></script>

    
    
    
  </body>
</html>
