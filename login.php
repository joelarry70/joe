<?php
 include("conx.php");
 $em=$_POST['em'];
 $pw=$_POST['pw'];
  
 $fit="SELECT * FROM LOGIN  WHERE email='$em' AND mdp='$pw'";
 $res=mysqli_query($connx, $fit);
  if ( $row=mysqli_num_rows($res)== 1){header('location:index.html');

  }else {header('location:login.html');}
  ?>
  