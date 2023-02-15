<?php

// continue


// for ($count=0; $count<= 10; $count++){
//     if ($count % 2 !== 0){
//         continue;
//     }
//     echo $count. ", ";
// }

// what's wrong with this?

// $count = 0;
// while ( $count <= 10 ) {
//     if ( $count == 5 ) {
//         $count++;
//         continue;
//     }
//     echo $count . ", ";
//     $count++;
// }


for ($i = 0; $i <= 5; $i++){
    if($i == 3){
        continue (1);
    }
    for ($j = 0; $j <= 5; $j++){
        if($j == 4){
            continue (2);
        }
        echo $i." - " .$j. "\n";
    }
}