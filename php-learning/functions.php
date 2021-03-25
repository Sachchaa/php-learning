<?php

/*

//print something
function hello_world()
{
    echo "Hello World!";
}

?>
<p><?php hello_world(); ?></p>


//return shomething
function hello_world()
{
    return "Hello World!";
}

echo '<p>' . hello_world() . '</p>';


$today = date("F j, Y");

echo "<p> $today </p>";

*/

function is_palindrome($string)
{
    //convert string to lowercase and remove spaces
    $string = str_replace(' ', '', strtolower($string));
    //check string against that same string reveresed
    return ($string == strrev($string));
}

$check_string = 'Race car';

if (is_palindrome($check_string)) {
    echo "<p>$check_string is a palindrome</p>";
} else {
    echo "<p>$check_string is not a palindrome</p>";
}
