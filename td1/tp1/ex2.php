<?php
  $size = $_GET["size"];
  $color = $_GET["color"];
  $message = $_GET["message"];

  if (empty($_GET)) {
    echo "Aucun paramètres !";
  }
  echo "<div style='font-size: {$size}px;color: {$color};'>{$message}</div>";
?>
<a href="/web-dyna-td1/td1/tp1/ex2.php?message=Hello There&size=15&color=red">Message rouge de 15px</a>
<br>
<a href="/web-dyna-td1/td1/tp1/ex2.php?message=General Kenobi&size=30&color=green">Message vert de 30px</a>
<br>
<a href="/web-dyna-td1/td1/tp1/ex2.php?message=Ah yes, the negociator&size=50&color=blue">Message bleu de 50px</a>
