<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Document</title>
</head>

<body>

<?php

$x = "outside"; 
// global scope

function convert(){
global $x;
// We can change this wherever we want because it is global

$x = "inside"; 
// local scope

}

echo $x;

echo "<br>";

convert();

echo $x;

echo "<br>";

echo $x;


?>

</body>
</html>
