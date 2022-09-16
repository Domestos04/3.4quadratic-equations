<?php
// a*x2 + b*x +c = 0
$x = rand(-10, 10);
$a = rand(-10, 10);
$b = rand(-10, 10);
$c = rand(-10, 10);

if ($x != 0){
    // if($x != 0){
    $x = $b * $b - 4 * $a * $c;
    echo "<span style = \" color: BlueViolet;\">Квадратне рівняня:</span>". $x. " ";  
// }
}else {
    echo "Помилка";
 }

?>