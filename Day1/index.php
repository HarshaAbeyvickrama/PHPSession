<?php

//function declaration
//telling the function what to do
// function printName($name , $age , $noOfChildren = 0){
//     echo "My name is $name and I am $age years old <br />";
//     echo "I have $noOfChildren children<br /><br />";
// }

//function call
// printName("John" , 55 , 5);

// printName(age:23 , name:"Mush" , noOfChildren:10);


// function getName($fName , $lName){
//     return $fName . ' ' . $lName;
// }

// echo(getName("VH" , "Abeyvickrama"));


// add 
// The addition of N1 and N2 is ANSWER

// $names = array("John" , "Mush" , "VH" , "Abeyvickrama");

// foreach($names as $name){
//     echo $name . '<br />';
// }


// ======================Arrays===================

// 1. Numeric Arrays
// 2. Associative arrays (Key => value)
// 3. Multidimentional arrays [array1 , array2 , array3]
// $users = array("Harsha" , "Ayisha" , "Mushrifa" , "Induni"); //["Harsha" , "Ayisha" , "Mushrifa" , "Induni"]
// name : Harsha
// Age
// Gender
// $userDetails = array("age" => 23 , "gender" => "M");

// print_r($userDetails['name']);


$users = array(
    "Harsha" =>array("age" => 23 , "Gender" => "M"), 
    "Ayisha" =>array("age" => 24 , "Gender" => "F"), 
    "Mushrifa" =>array("age" => 22 , "Gender" => "F"), 
    "Induni" =>array("age" => 22 , "Gender" => "F")
);

print_r($users['Harsha']['age']);
