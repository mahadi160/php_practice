<?php

// Fibonacci 

// $veryOld = 0;
// $old= 1;
// $new = 1;

// for($i=0; $i <= 50; $i++){
//     echo $veryOld. " ";
//     $old = $new;
//     $new = $old + $veryOld;
//     $veryOld = $old;
// }

echo "\n ============= \n";

// $n = 50;

// $first = 0;
// $second = 1;

// for($i = 0; $i <= $n; $i++){
//     if($i <= 1){
//         $next= $i;
//     }else{
//         $next = $first + $second;
//         $first = $second;
//         $second = $next;
//     }

//     echo $next. " ";
// }

// 14. Printing Fibonacci Series Using Recursive Functions

// function fibonacci($old, $new, $start, $end){
//     if($start > $end){
//         return;
//     }
//     $start++;

//     echo $old. " ";
//     $_temp = $old + $new;
//     $old = $new;
//     $new = $_temp;

//     fibonacci($old, $new, $start, $end);
// }

// fibonacci(0,1,1,10);

function fibonacci($old, $new, $end){
    static $start;
    $start = $start ?? 1;

    if($start > $end){
        return;
    }
    $start++;

    echo $old. " ";
    $_temp = $old + $new;
    $old = $new;
    $new = $_temp;

    fibonacci($old, $new, $end);
}

fibonacci(0,1,10);



