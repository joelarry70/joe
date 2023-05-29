<?php
 include("conx.php");

$type=$_POST['payment'];
$Cardholder = $_POST['Cardholder'];
$Valid = $_POST['Valid'];
$verification = $_POST['verification'];
$Number=$_POST['Number'];
$fit= "INSERT INTO pay (style,chn,valid,cvv,cn) VALUES ('$type','$Cardholder','$Valid','$verification','$Number')";
$res=mysqli_query($connx, $fit);
 ?>