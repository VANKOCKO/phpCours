<?php

// What is a variable

// Variable types

/**
 *   String
 *   Integer
 *   Boolean
 *   Null 
 *   Array
 *   Object 
 *   Resource
 * */


// Declare variables

$name = " kocko";
$age =  32;
$isMale = true; 
$height =  1.85;
$salary=null;

// Print the variables. Explain what is concatenation

echo $name."<br>";
echo $age."<br>";
echo $isMale."<br>";
echo $height."<br>";
echo $salary."<br>";

// Print types of the variables

echo gettype($name)."<br>";
echo gettype($age)."<br>";
echo gettype($isMale)."<br>";
echo gettype($height)."<br>";
echo gettype($salary)."<br>";


// Print the whole variable

var_dump($name,$age,$isMale,$height,$salary)."<br>";


// Change the value of the variable

$name = true;

// Print type of the variable

echo gettype($name)."<br>";

// Variable checking functions

is_string($name)."<br>";
is_int($age)."<br>";
is_double($height).'<br>';
is_null($salary).'<br>'; 


// Check if variable is defined

isset($salary);
isset($address);

// Constants

define('PI',3.14).'<br>';
echo PI.'<br>';   

// Using PHP built-in constants

echo SORT_ASC.'<br>'; 
echo PHP_INT_MAX.'<br>';
 