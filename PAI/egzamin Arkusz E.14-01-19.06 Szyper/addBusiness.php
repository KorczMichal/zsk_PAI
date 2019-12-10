<?php
$connect= mysqli_connect('localhost','root',"","sklep_MK");
if(!empty($_POST['name']) && !empty($_POST['address'])) {
$nazwa= $_POST['name'];
$adres= $_POST['address'];
$sql="INSERT INTO `dostawcy` (nazwa,adres) VALUES (\"$nazwa\",\"$adres\")";
$result=mysqli_query($connect,$sql);}
mysqli_close($connect);
header("Location: index1.php");

 ?>
