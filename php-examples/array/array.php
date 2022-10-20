<!DOCTYPE html>
<?php
$arr = array(1,2,3);
//Agregamos contenido a un indice fuera de "rango", en php es dinamico asi que podemos hacerlo
$arr[10] = 'hello';
//Si volcamos la estructura vemos que tiene 4 items [0],[1],[2],[10]
var_dump($arr);
//Equivalente a arr.lenght en JS cualquiera de estos 2 metodos:
echo "<br>sizeof(): ".sizeof($arr)."<br>count(): ".count($arr);
//El indice 3 no existe php nos da un WARNING:
echo "$arr[3]";
//El indice 10 si existe
echo "<br>$arr[10]";
//Conclusion, en php debemos trabajar los indices de manera incremental para que el programa sea preciso y facil de comprender
//Alternativa, array_fill()
?>
