<?php

//for loop
$colors = array('blue', 'red', 'green', 'yellow');

for ($i = 0; $i < sizeof($colors); $i++) {
    echo "<p> $colors[$i] </p> ";
}

//foreach
foreach ($colors as $color) {
    echo "<p> $color </p> ";
}

$home_towns = array(
    'Sachin' => 'Clyde North',
    'Don' => 'Clyde North',
    'Thusie' => 'Burwood',
);

foreach ($home_towns as $name => $town) {
    echo "<p> $name lives in $town </p>";
}

//print every number un the Fiobnacci Sequence without going over 200

$current = 1;
$previous = 0;
$next = null;
$limit = 200;
$sequence = '';

while ($current < $limit) {
    $sequence .= $current . ', ';
    $next = $current + $previous;
    $previous = $current;
    $current = $next;
}

$sequence = trim($sequence);
$sequence = substr($sequence, 0, strlen($sequence) - 1);

echo $sequence;
