<?php

$length = 10;  
$width = 5;    
$area = $length * $width;


$perimeter = 2 * ($length + $width);


//echo "Length: " . $length . " units<br>";
//echo "Width: " . $width . " units<br>";
echo "Area of the rectangle: " . $area . " square units<br>";
echo "Perimeter of the rectangle: " . $perimeter . " units<br>";

$vat_rate=0.15;
$amount=1000;

$vat=$amount*$vat_rate;
$total_amount=$amount+$vat;

echo "Amount: " . $amount . " units<br>";
echo "VAT (15%): " . $vat . " units<br>";
echo "Total Amount (Including VAT): " . $total_amount . " units<br>";

    $number= 11;
    echo"<br>";

    if($number%2==0){
        echo"{$number} is an even number";
    }else{ 
        echo"{$number} is an odd number";
    }

$n1 = 5;
$n2 = 1;
$n3 = 57;
    echo"<br>";

if ($n1 > $n2 && $n1 > $n3) {
    echo "large num {$n1}";
} elseif ($n2 > $n1 && $n2 > $n3) {
    echo "large num {$n2}";
} else {
    echo "large num {$n3}";
}
    echo"<br>";

for($n=10; $n<101; $n++){
  if($n%2==0){
    echo"{$n},";
    }
}

$arr=[2,4,51,4,6];
    echo"<br>";

for($i=0; $i<5; $i++)
{
if($arr[$i]===51){
    echo"51 found a index {$i}";
}
}
    echo"<br>";
    $c=1;
for($i=0; $i<3; $i++)
{
for($j=0; $j<$c; $j++)
{
     echo"*";
   

}
  $c++;
   echo"<br>";
}


?>

