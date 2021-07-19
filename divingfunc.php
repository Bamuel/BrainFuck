<?php
divisible(12);
//2,3,5,7,11,13,17,19,23,29,31,37,41,43,47,53,59,61,67,71,73,79,83,89,97,101,103,107,109,113,127,131,137,139,149,151,157,163,167,173,179,181,191,193,197,199,211,223,227,229,233,239,241,251
function divisible($num)
{
    while ($num <> '1') {
        if ($num % 2 == 0) {
            $num = $num / 2;
            echo "2";
            continue;
        }
        if ($num % 3 == 0) {
            $num = $num / 3;
            echo "3";
            continue;
        }
        if ($num % 4 == 0) {
            $num = $num / 4;
            echo "4";
            continue;
        }
        if ($num % 5 == 0) {
            $num = $num / 5;
            echo "5";
            continue;
        }
        if ($num % 6 == 0) {
            $num = $num / 6;
            echo "6";
            continue;
        }
        if ($num % 7 == 0) {
            $num = $num / 7;
            echo "7";
            continue;
        }
    }
    //echo $num;
}