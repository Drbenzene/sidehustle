<?php

/*A range function that takes two arguments, start and end, 
and returns an array containing all the numbers from start up to (and including) end.*/

function myFunction(){

    $result = array(range(1,50));

    return $result;

}

myFunction();

// sum function that takes an array of numbers and returns the sum of these numbers.

function sum(){
    $numbers = array(2,6,10,15,45,60);
    $addition = array_sum($numbers);
    return $addition;
}

sum();

?>
