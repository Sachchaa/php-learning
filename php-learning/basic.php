<?php

//variables
$name = "Sachin";
$age = 25;

//constants
define('passport', 'ABC123456');

print 'My nanme is ' . $name . ', ' . $age . ' years old and passport number is ' . passport;

//indexable array
$colors = array('red', 'blue', 'green');
print_r($colors);

echo '<p>' . $colors[1] . '</p>';

$colors[] = 'yellow';
print_r($colors);

//associative array
$home_towns = array(
    'Sachin' => 'Clyde North',
    'Don' => 'Clyde North',
    'Thusie' => 'Burwood',
);

echo '<pre>';
print_r($home_towns);
echo '</pre>';


$name = "Teresa"; //Heading 1
$city = "NYC";
$movie = "Star Wars"; //Italics
$friend = "George"; //Bold
$candy = "Sour Patch Kids";

echo "<h1>Hello, $name!</h1>\n\n";

echo "<p>She lives in $city. Her favorite movie is <i>$movie</i> and her best friend is <b>$friend.</b></p>";
