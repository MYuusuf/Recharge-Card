<?php

for($i=1; $i<300; $i++)
{

$digits = array(0, 1, 2,3, 4,5,6,7,8,9);
$pin= $digits[rand(0,9)].$digits[rand(0,9)].$digits[rand(0,9)].$digits[rand(0,9)].$digits[rand(0,9)].$digits[rand(0,9)].$digits[rand(0,9)].$digits[rand(0,9)].$digits[rand(0,9)].$digits[rand(0,9)].$digits[rand(0,9)].$digits[rand(0,9)].$digits[rand(0,9)];

echo "CardNo_$i is <strong><code>$pin</code></strong> </br> ";

}
    
?>
