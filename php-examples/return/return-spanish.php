<?php
/*
*
* Ejemplo ejecutable sobre retornar variables desde una función usando return
* Intenté ser claro explicandolo pero talvez lo explique luego en quartex.net
*
* @package return-example
* @author thekorko support[AT]quartex.net
* @ink www.quartex.net
*
*
*/
header('Content-Type: text/html; charset=utf-8'); //cuestiones del header

//Retornar/devolver una simple cadena
function return_example_var() {
  $var = "foo"; //una cadena
  return $var;
}


$var = return_example_var(); //return se usa así, asignamos a una variable, la funcion que hace return
echo "<b>" . $var . "</b>bar <br>"; //imprime en pantalla la variable concatenada con html y texto

//Devolvemos un array(arreglo), pero usando array_push
//Para un ejemplo mas simple, sin array_push podemos ver el manual de php
//https://www.php.net/manual/es/functions.returning-values.php
//por ejemplo return array (0, 1, 2);
//o tal vez algo con variables:
//$arreglo = array($variable, $otravariable);
//return arreglo;
//https://www.php.net/manual/es/function.return.php
//
function return_example_array() {
  $var = "example foo"; //cadena 1
  $foo = "bar"; //cadena 2
  $array = array($var); //un arreglo con $var en el indice 0
  //bien podria ser que usemos un arreglo como este:
  //$array = array($var, $foo);
  //Pero vamos a usar array_push() para agregar la variable $foo
  array_push($array, $foo); //El primer parametro es el array al que queremos modificar, el segundo parametro es una variable
  //Doc de array_push
  //https://www.php.net/manual/es/function.array-push.php
  return $array;
}


$array = return_example_array(); //Devolvemos y guardamos el arreglo entero en esta variable
print_r($array); //Imprimimos todo el contenido del arreglo en un formato entendible, para poder analizarlo
//var_dump($array); Este tambien sirve para el mismo proposito

echo "<br><b>" . $array[0] . $array[1] . "</b>"; //Un poco de concatenación para mostrar lo que dice nuestro arreglo

echo "<br>Feliz aprendizaje!<br><a href='https://quartex.net'>thekorko</a><br>"
//check out quartex.net
?>
