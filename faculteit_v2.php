<?php
echo "Van welk getal wil je de faculteit weten?\n";
$a = readline('>');
$i = 1 ;
$b = 1 ;
while ($i != $a )
{
$b = $b * ($i + 1);
$i++;
if (!is_numeric($a))
exit ($b . "is geen getal");

}
echo $b;
 ?>
