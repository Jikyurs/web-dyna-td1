<?php
include "header.php";

$nblignes = $_GET["lignes"];
$nbcolonnes = $_GET["colonnes"];

echo "<table border='1'>
<tbody>";
for($i=0;$i<$nblignes;$i++){
  echo"<tr>";
  for ($j=0; $j<$nbcolonnes; $j++) {
    if(($i%2)==0){
      $Bold = "bold";
    }
    else{
      $Bold = "normal";
    }
    if(($j%2)==0){
      $Red = "red";
    }
    else{
      $Red = "black";
    }
    echo"<td align='center'><p style='font-weight: $Bold; color:$Red;'>$i-$j";
    echo"</p></td>";
  }
  echo"</tr>";
}
echo "</tbody>
</table>";

echo "<a href='?lignes=2&colonnes=2'>2 x 2</a>
<br>
<a href='?lignes=5&colonnes=5'>5 x 5</a>
<br>
<a href='?lignes=10&colonnes=8'>10 x 8</a>";

include "footer.php";
