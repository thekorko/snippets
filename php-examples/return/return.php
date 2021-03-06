<?php
/*
*
* Executable example about returning values from a function
* Intends to be self-explained but i'll probably post and explain it on quartex.net
*
* @package return-example
* @author thekorko support[AT]quartex.net
* @ink www.quartex.net
*
*
*/
header('Content-Type: text/html; charset=utf-8'); //header stuff

//Simple string return function
function return_example_var() {
  $var = "foo"; //a simple string
  return $var;
}


$var = return_example_var(); //return is suposed to be used this way
echo "<b>" . $var . "</b>bar <br>"; //echoes our string and puts a linebreak

//Returns an array but using array_push
//for a more basic example check php manual
//https://www.php.net/manual/en/functions.returning-values.php
//https://www.php.net/manual/en/function.return.php
//
function return_example_array() {
  $var = "example foo"; //string 1
  $foo = "bar"; //string 2
  $array = array($var);
  //array could be
  //$array = array($var, $foo);
  //but we are using array_push() for adding the $foo variable
  array_push($array, $foo); //first parameter is a given array, second parameter is data.
  //https://www.php.net/manual/en/function.array-push.php
  return $array;
}


$array = return_example_array(); //stores the returned array into a variable
print_r($array); //prints array in human readable format for array understanding
//var_dump($array); debug with this too.

echo "<br><b>" . $array[0] . $array[1] . "</b>"; //some concatenation using an array

echo "<br>Happy learning<br><a href='https://quartex.net'>thekorko</a><br>"
//check out quartex.net
?>
