<?php
include "header.php";

$nblignes = $_GET["lignes"];
$nbcolonnes = $_GET["colonnes"];

echo "<table border='1'>
  <tbody>";
  for($l = 0; $l <= $nblignes; $l++) {
    if (($l % 2) == 0) {
        $bold = "bold";
      }
      else {
        $bold = "normal";
      }
      echo "<tr font-weight=$bold>";
    }

    for($c = 0; $c <= $nbcolonnes; $c++) {
      echo "<td align='center'>$l-$c</td>";
    }
    echo "</tr>";
  echo "</tbody>
</table>";
?>
