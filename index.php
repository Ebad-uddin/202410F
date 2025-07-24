<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    
<?php
$std = [
"std1" => "ebad",
"std2" => "uzair",
"std3" => "ali",
"std4" => "salman"
];

?>



<table border="1"> 
    <thead>
        <tr>
            <th>Id</th>
            <th>Name</th>
        </tr>
    </thead>
    <tbody>
        <?php
        $x = 1;
        foreach($std as $key => $value){
        ?>
        <tr>
            <td><?php echo $x?></td>
            <td><?php echo $value?></td>
        </tr>
        <?php
        $x++;
        }
        ?>
    </tbody>
</table>


</body>
</html>









<?php

// echo "<h1> Ebad uddin here </h1>";
// echo "<br>";
// echo "Hello world";
// echo "<br>";

// (.) sign of concatenation in php to join the statements



// print "print statement" . "print statement" . "dot sign";

// // variable
// // variable is like a container


// // variable declaration

// // variableName = Data;

// // datatype
// // string, integer, boolean, float, array

// echo "<br>";

// // string
// $name = "Ebad23432 uddin ahmed";
// echo $name;
// // var_dump returns Datatype, Character_length, Data 
// var_dump($name);
// echo "<br>";


// // integer
// $age = 34;
// // echo $age;
// var_dump($age);
// echo "<br>";

// // boolean
// $bool = true;
// // echo $bool;
// var_dump($bool);
// echo "<br>";

// $float = 4.5;
// // echo $float;
// var_dump($float);

// operators
// // arithmetic Operators (+, -, *, /, %)

// $num1 = 13;
// $num2 = 5;

// $result = $num1 + $num2;
// echo $result;

// echo "<br>";
// $subt = $num1 - $num2;
// echo $subt;


// assignment operator
// =, +=, -=, *=, /=
$a = 10;
// $a += 4;    // (a = a + 4)
// $a -= 4;    // (a = a - 4)
// $a *= 4;    // (a = a * 4)
// $a /= 4;    // (a = a / 4)
// $a %= 4;    // (a = a % 4)
// echo $a;

// comparison operator
// >, <, >=, <=, ==, ===
$b = 20;
// it returns true if a is greater
$result = $a > $b;
// echo "The result of a > b where a = " . $a . " and b = "  . $b . " is " . $result . "<br>";

// it returns true if a is lesser
// $result = $a < $b;
// echo $result;

// // it returns true if either a is greather or equal to b
// $result = $a >= $b;
// echo $result;


// $result = $a <= $b;
// echo $result;

// // it return true if the value of a is equal to the value of b
// // $result = $a == $b;
// // echo $result;

// // // it return true if the value and datatype of a is equal to the value and datatype of b
// // $result = $a === $b;


// // echo $result;


// // if elseif else (multiple conditions)


// $percentage = 99;

// if($percentage > 80){
//     echo "Grade A+";
// }elseif($percentage >= 71 and $percentage <= 79){
//     echo "Grade A";
// }elseif($percentage >= 61 and $percentage <= 69){
//     echo "Grade B";
// }elseif($percentage >= 51 and $percentage <= 59){
//     echo "Grade C";
// }else{
//     echo "Fail";
// }

// // nested if (if k andar if condition k bd condition)

// // weapon checking, cheaque book

// $carryWeapon = "no";
// $cheaqueBook = "yes";

// if($carryWeapon == "no"){
//     if($cheaqueBook == "yes"){
//         echo "you can withdraw you money";
//     }else{
//         echo "you cannot withdraw your money";
//     }
// }else{
//     echo "Call the Police";
// }

// loops
// for, while, do while, foreach

// for(declaration; condition; increment/decrement){

    // statement;

// }

// for($i = 1; $i < 1001; $i++){
//     echo "<br>" .$i . ") <h1>Ebad</h1>";
// }

// for($j = 0; $j <= 100; $j++){
//     echo  "<u><b><li style='font-size:20px; color:red;'><img src='img/car.jpg' height='50' width='50'> Ebad Uddin Ahmed</li></b></u>";
// }

$a = 1;
// while($a < 11){
//     echo "<br>" . $a;
//     $a++;
//     if($a == 5){
//         echo "<br>ebad";
//         break;
// //     }
// // }


// do{
//     echo "<br>" . $a;
//     $a++;
// }while($a < 20);

// // nested loops

// for($i = 0; $i <= 3; $i++){      // outer loop

//     for($j = 0; $j <= 2; $j++){     //inner loop
    
//         echo "<br>i =" . $i . "and j = " . $j;
    
//     }

// }

// Array (multiple data storage in a single variable of same datatype)

// syntax:      
// $vairble = [ 1, 20 , 30 , 40 , 50 ]


// indexed array, associative array, multidimensional array

// $numbers = [20, 30, 25, 45, 60, 100];

// echo $numbers[2] . "<br>";

// for($a = 0; $a <= 5; $a++){
//     echo "$numbers[$a]<br>";
// }


// $students = ["Usama", "Salman pathan" , "Ritik Lotion", "Sunny dhai kilo", "Shahrukh pagal"];

// for($i = 0; $i < count($students); $i++){
//     echo $students[$i] . "<br>";
// }

// echo "Foreach Loop";
// foreach ($students as $key => $value) {
//     echo "<br> $key = $value <br>";
// }


// // associative array

// $class = [
//     "std1" => "ebad",
//     "std2" => "Moiz",
//     "std3" => "ali",
// ];
// // var_dump($class);
// // echo $class["std3"];

// foreach ($class as $key => $value) {
//     echo "$key = $value <br>";
// }



$numbers = [
    [1,45,6,7,8],
    [5,66,34,65,98]
];

// var_dump($numbers);
// echo "<pre>";
// print_r($numbers);
// echo "</pre>";

echo $numbers[1][2];

foreach ($numbers as $key => $value) {
    foreach ($value as $k => $v) {
        echo  "<br>" . $v ;
    }
}

// multidimensional associative array

$mul_associative = [
    "maths" => [22 => -90, 65 => 2000 , 76 => 8000000],
    "English" => [22 => 80, 65 => 2 , 76 => 0.44],
    "Urdu" => [22 => 800, 65 => 29 , 76 => 0.014],
];

foreach ($mul_associative as $key => $value) {
    // echo "<br>$key";
if($key == "maths"){
    foreach ($value as $k => $v) {
        echo "<br> $k => $v";
    }
}



}

function Fullname(){
    echo "Ebad uddin";   
    // echo "Ebad uddin";   
    // echo "Ebad uddin";   
    // echo "Ebad uddin";   
    // echo "Ebad uddin";   
}
// Fullname();
// Fullname();
// echo "break";
// Fullname();

// function yourName(){
//     echo " your name is  "; 
//     Fullname();
// }

// yourName();


// parameterized function

function printName($name){
    echo $name;
}

printName("Ebad");

function addition($a , $b){
    echo $a + $b;
}
addition(4 , 9);

$family = ["Ali M" , "M Ali", "Aliza", "Aliya", "Sadia", "Fatima" , "Bushra" , "Sobia"];
$fam = ["ahad" , "ahmed" , "aliyaan"];
$class = ["nehal" , "khalid" , "aman" , "usman" , "noor" , "hanzala"];
function khandan($arr){

foreach ($arr as $i => $e) {
    echo "<br> 10F Students Names are $e";
}
}
khandan($family);
khandan($fam);
khandan($class);




































































?>