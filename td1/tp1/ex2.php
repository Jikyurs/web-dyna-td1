<?php
  $size = $_GET["size"];
  $color = $_GET["color"];
  $message = $_GET["message"];

  if (empty($_GET)) {
    echo "ATTENTION ! Aucun paramètres renseignés !";
  }
  if (empty($color) and empty($size)) {
    $size = 12;
    $color = "black";
  }
  echo "<div style='font-size: {$size}px;color: {$color};'>{$message}</div>";
?>
<a href="/web-dyna-td1/td1/tp1/ex2.php?message=Hello There&size=15&color=red">Message rouge de 15px</a>
<br>
<a href="/web-dyna-td1/td1/tp1/ex2.php?message=General Kenobi&size=30&color=green">Message vert de 30px</a>
<br>
<a href="/web-dyna-td1/td1/tp1/ex2.php?message=Ah yes, the negociator&size=50&color=blue">Message bleu de 50px</a>
<br>
<form method="GET">
    <label for="$message">Message : </label>
    <input type="text" value="" name="message" id="message">
    <label for="$size">Size : </label>
    <input type="number" value="" name="size" id="size">
    <label for="$color">Color : </label>
    <input type="color" value="" name="color" id="color">
    <input type="submit" value="Valider">
</form>
