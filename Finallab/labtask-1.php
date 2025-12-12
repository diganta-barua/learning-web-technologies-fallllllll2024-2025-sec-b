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
 echo "<br>";

    $c1 = 3;
    for ($i1 = 0; $i1 < 3; $i1++) {
        for ($j1 = 0; $j1 < $c1; $j1++) {
            echo ($j1 + 1);
        }
        $c1--;
        echo "<br>";
    }

    echo "<br>";


    $c3 = 1;
    $char = 65;
    for ($i1 = 0; $i1 < 3; $i1++) {
        for ($j1 = 0; $j1 < $c3; $j1++) {
            echo (chr($char));
            $char++;
        }
        $c3++;
        echo "<br>";
    }

    echo '<br>';


 $arr = [
        [1, 2, 3, 'A'],
        [1, 2, 'B', 'C'],
        [1, 'D', 'E', 'F']
        ];

$a = 3;
    for ($i = 0; $i < 3; $i++) {
        for ($j = 0; $j < $a; $j++) {
            echo $arr[$i][$j];
        }
        $a--;
        echo '<br>';
    }
    echo '<br>';


 $a = 3;
    for ($k = 0; $k < 3; $k++) {
        for ($l = $a; $l < 4; $l++) {
            echo $arr[$k][$l];
        }
        $a--;
        echo '<br>';
    }


?>


