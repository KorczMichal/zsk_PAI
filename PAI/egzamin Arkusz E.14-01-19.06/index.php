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
  mysqli_close($connect);
?>

<form method="post">
  <select name="towar">
    <option value="c">Czekolada</option>
    <option value="g">Grześki</option>
    <option value="b">Baton</option>
  </select>
  <button type="submit" name="button">WYBIERZ</button>
</form>
  </body>
</html>
