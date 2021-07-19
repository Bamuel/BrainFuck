<?php
$code = 'Samuel';
$assicText = unpack("C*",$code);
array_unshift($assicText, 0);
print_r($assicText);
$k=0;
$multiplier=5;
for ($x = 0; $x < count($assicText)-1; $x++) {
    $TextDiff[] = $assicText[$k+1] - $assicText[$k];
    $k++;
}
//++[>+++<-]>[<++++>-]> multiplication by 3
echo "<br>";
//echo ">";
foreach ($TextDiff as $value){
    if ($value >= 0){
        if ($value >= $multiplier){
            for ($x = 0; $x < $multiplier; $x++) {
                echo "+"; //multiplier
            }
            echo "[>";
            for ($x = 0; $x < ($value/$multiplier); $x++) {
                echo "+"; //diff
            }
            echo "<-]";
            echo ">";
            for ($x = 0; $x < ($value%$multiplier); $x++) {
                echo "+"; //mod remainder
            }
            echo ".<";
        }
        else{
            for ($x = 0; $x < $value; $x++) {
                echo ">+";
            }
            echo ".<";
        }
    }
    else{
        $value = abs($value);
        if ($value >= $multiplier){
            for ($x = 0; $x < $multiplier; $x++) {
                echo "+"; //diff
            }
            echo "[>";
            for ($x = 0; $x < ($value/$multiplier); $x++) {
                echo "-"; //diff
            }
            echo "<-]";
            echo ">";
            for ($x = 0; $x < ($value%$multiplier); $x++) {
                echo "-"; //mod remainder
            }
            echo ".<";
        }
        else{
            for ($x = 0; $x < $value; $x++) {
                echo ">-";
            }
            echo ".<";
        }
    }
}

echo "<br>";
print_r($TextDiff);
