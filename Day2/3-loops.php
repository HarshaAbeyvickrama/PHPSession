<?php

// Loops types 4
// 1. for loop
// 2. while
// 3. do while
// 4. foreach

// 1. for loop

// for($i=0 ; $i<10 ; $i++){
//     echo $num;
//     echo "<br />";
// }

// 3. do while

// $num =  5;
// do {
//     echo "Hello <br />";
//     $num++;
// } while ($num < 10);

// 4. foreach

$names = array("John", "Mary", "Peter", "Sally");
// for($i = 0 ; $i< 4 ; $i++){
//     echo $name[$i];
//     echo "<br />";
// }

// foreach($names as $name){
//     echo "Name : " . $name;
//     echo "<br />";
// }

// Break

// foreach($names as $name){
    
//     echo "Name : " . $name;
//     echo "<br />";

//     if($name == "Peter"){
//         break;
//     }
// }
// continue

// foreach($names as $name){
    
//     if($name == "Peter"){
//         continue;
//     }
//     echo "Name : " . $name;
//     echo "<br />";
// }

// for($i = 0 ; $i < 5 ; $i++){

// }
// $x = 5; 
// $a = $x++;  //5
// $b = ++$x;  //7 

// echo $a;
// echo "<br />";
// echo $b;

// Nested loops

//                outer   Inner
// *                1       1
// **               2       2
// ***              3       3
// ****             4       4
// *****            5       5

$n = 50;
for ($i=1; $i <= $n; $i++) { //outer

    for ($j=1; $j <= $i; $j++) { 
        echo "* ";
    }
    echo "<br />";
}