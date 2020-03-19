<?php
  $size = $_POST["size"];
  $color = $_POST["color"];
  $message = $_POST["message"];

  if (empty($_POST)) {
    echo "ATTENTION ! Aucun paramètres renseignés !";
  }
  if (empty($color) and empty($size)) {
    $size = 12;
    $color = "black";
  }
  echo "<div style='font-size: {$size}px;color: {$color};'>{$message}</div>";
?>

<form method="post">
    <label for="$message">Message : </label>
    <textarea name="message" id="message" placeholder="Ecrire un message"></textarea>
    <label for="$size">Size : </label>
    <input type="number" value="" name="size" id="size">
    <label for="$color">Color : </label>
    <input type="color" value="" name="color" id="color">
    <input type="submit" value="Valider">
</form>
