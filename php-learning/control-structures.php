<?php

//match statement
$x = 0;

$result = match ($x) {
    1 => '$x is 1',
    2 => '$x is 2',
    default => '$x is neiter 1 or 2',
};

echo $result;

//switch statement
$turtle = 'Leo';
$bandana = '';

switch ($turtle) {
    case 'Leo':
        $bandana = 'blue';
        break;
    case 'Raph':
        $bandana = 'red';
        break;
    case 'Mike':
        $bandana = 'yellow';
        break;
    case 'Don':
        $bandana = 'pink';
        break;
}

echo "<p> $bandana </p>";


$min = 1;
$max = 50;
$guess = 4; //change this value to test
$num = 16; //change this value to test

if ($guess < $min || $guess > $max) {
    echo "<p>Your guess is out of range</p>";
} else {
    if ($num == $guess) {
        echo "<h3>That\'s Correct!";
    } else if ($num > $guess) {
        echo "<p> Sorry - the guess is too low </p>";
    } else {
        echo "<p> Sorry - the guess is too high</p>";
    }
}
