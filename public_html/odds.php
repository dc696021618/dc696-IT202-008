<?php

// UCID: dc696
// Data: 3/9/20026
function printOdds($arr){

    // plan:
    // 1. loop through the array
    // 2. check if number is odd using % 2
    // 3. store odd numbers
    // 4. print them separated by commas

    $result = [];

    foreach($arr as $num){
        if($num % 2 !== 0){
            $result[] = $num;
        }
    }

    echo implode(", ", $result);
}
?>