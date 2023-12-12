<?php 
// Opdracht 4.6.php
// Author = Dylan van Schouwen

date_default_timezone_set ("Europe/Amsterdam");

$uur = date ('G');
$min = date ('i'); 
$temperatuur = 1;
$vochtigheid = 80;

echo "$uur:$min <br>";
echo "$temperatuur <br>";
echo "$vochtigheid <br>";

if ($uur >= 8 && $uur <= 17){
    echo "het is $uur:$min <br> de airco staat aan";
} elseif ($uur = 17 || ($temperatuur <= 20 && $vochtigheid <= 85)){
    echo "het is $temperatuur graden en de vochtigheid is $vochtigheid <br> de airco staat aan";
} else{
    Echo "de airco staat uit";
}

?>