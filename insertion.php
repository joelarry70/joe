<?php
 include("conx.php");
$email=$_POST['email'];
$full=$_POST['full'];
$un=$_POST['un'];
$pw= sha1($_POST['pw']);
$fit= "INSERT INTO login(email,fullname,username,mdp) VALUES ('$email','$full','$un','$pw')";
$res=mysqli_query($connx, $fit);
header('location:payment.html')
 ?>
 