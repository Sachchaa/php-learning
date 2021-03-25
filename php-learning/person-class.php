<?php

class Person
{
    //no need to write below three lines in php8
    var $name;
    var $age;
    var $birthday = false;

    function __construct($name, $age)
    {
        $this->name = $name;
        $this->age = $age;
    }
}
