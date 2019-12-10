<!DOCTYPE html>
<html lang="pl" dir="ltr">
  <head>
    <meta charset="utf-8">
    <title></title>
  </head>
  <body>
<?php
  $sql = "SELECT * FROM `towary` WHERE promocja= 1";

  $connect= mysqli_connect("localhost",'root',"",'sklep_MK');
  mysqli_set_charset($connect,"utf8");
  $result= mysqli_query($connect,$sql);
echo "<ul>";
  while($row = mysqli_fetch_assoc($result)){
    echo '<li>',$row["nazwa"],'</li>';
  }
echo "<ul>";

?>

<form method="post">
  <select name="towar">
    <?php
    $sql="SELECT `nazwa` FROM `towary`";
    $result=mysqli_query($connect,$sql);

    while($row = mysqli_fetch_assoc($result)){
      echo  "<option value=\"$row[nazwa]\">$row[nazwa]</option>";
    }
    mysqli_close($connect);
     ?>
    <!-- <option value="c">Czekolada</option>
    <option value="g">Grześki</option>
    <option value="b">Baton</option> -->
  </select>
  <button type="submit" name="button">WYBIERZ</button>
</form>
<?php
if (isset($_POST["towar"])) {
  $towar= $_POST['towar'];

// switch ($_POST['towar']) {
//   case 'c':
//   $towar="Czekolada";
//     break;
//     case 'g':
//     $towar="Grześki";
//       break;
//       case 'b':
//       $towar="Baton";
//         break;
//
// }
echo $towar;
$connect= mysqli_connect('localhost','root',"","sklep_MK");
$sql= "SELECT cena FROM `towary` WHERE nazwa = \"$towar\"";
$result = mysqli_query($connect,$sql);
$row=mysqli_fetch_assoc($result);
$promocja = round($row['cena']*0.85,2);
echo " ",$promocja;
mysqli_close($connect);}
 ?>
 <hr>
 <form  action="addBusiness.php" method="post">
   <input type="text" name="name" placeholder="Nazwa dostawcy"><br>
   <input type="text" name="address" placeholder="Adres"><br>
   <input type="submit" name="button" value="Dodaj dostawcę">
 </form>

  </body>
</html>
