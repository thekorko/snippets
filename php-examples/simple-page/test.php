<head>
  <meta charset="UTF-8">
</head>
<body>
<header style="border: solid 2px black">
  <title>Una pagina test: ejemplo de titulo</title>
  <h2>Un test, de ejemplo, para un amigo</h2>
  <br>
  <b>Esta es una pagina que esta buena</b>
</header>
<br>
<section style="height: 600px;">
<?php
$titulo = 'Este es un post';
$contenido = 'Existe pues una forma lógica de colocar todos los contenidos dentro de un sitio y
unas etiquetas determinadas para contenerlos, atendiendo a la estructura que nosotros queremos
comunicar a los sistemas que puedan procesar el documento.<br> La imagen que acompaña a este texto
expresa una de las posibles formas de ordenar el documento con las etiquetas que nos proporciona HTML5.';
$imagen = 'https://desarrolloweb.com/articulos/images/html5/semantica-html.png';

print $titulo;
echo '<br>';
print $contenido;
echo "<br>";
echo ("<img src='$imagen'>");
?>

</section>
<footer style="border: solid 2px black; height: 200px;">
  <br>
  Powered by Valens
</footer>
</body>
