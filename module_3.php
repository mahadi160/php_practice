<?php
$students = [
    [
        'name' => 'Mahdi Hasan',
        'age'  => 32
    ],
    [
        'name' => 'Kamrul Hasan',
        'age'  => 26
    ],
    [
        'name' => 'Mikdar Hasan',
        'age'  => 16
    ],
    [
        'name' => 'Sahwatullh',
        'age'  => 12
    ],
];

foreach($students as $student){
    echo $student ['name']." - " .$student['age']. "<br>" ;
}


