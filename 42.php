<!DOCTYPE html>
<htm lang="en">

    <head>
        <meta charset="UTF-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>Ejercicio 112</title>
        <style>
        body {
            text-align: center;
            background-color: black;
            color: white;
        }

        spam {
            color: brown;
            background-color: aqua;
            font-size: bold;

        }
        </style>
    </head>

    <body>
        <h1>Programacion PHP</h1>
        <h3>Destacar mayor o menor</h3>
        <p>Generar e imprimir un array de 100 elementos y luego volver a imprimirlo pero esta vez destacando entre
            <br> asteriscos el numero mayor o menor segun se indique. Se debe dar la posibilidad de elegir cual se debe
            destacar
        </p>
        <h3>Elija ¿Qué quiere destacar? </h3>
        <form method="get" action="42.php">
            <button type="submit" name="deci" value="max">Maximo</button>
            <button type="submit" name="deci" value="min">Minimo</button>
        </form>
        <br>
        <br>





        <?php

if(isset($_GET["deci"])){
$eleccion=$_GET["deci"];





function crea_array($eleccion){
$base=0;
$techo=500; 
$tope=100;
 for($e=1;$e<=$tope;$e++){
$array[1][$e]=rand($base,$techo);}
$min=min($array[1]);
$max=max($array[1]);
$eleccion=="min"? $bandera=$min:$bandera=$max;
  for($e=1;$e<=count($array[1]);$e++){
$array[1][$e]==$bandera?$array[2][$e]=" <spam>** $bandera **</spam>":$array[2][$e]=$array[1][$e];}
return $array;
  }


function imprime_array($array){
for ($e=1;$e<=count($array[1]);$e++){
 if( $e%20==0){echo "<br>";}
 echo $array[1][$e]. "&nbsp"; 
}
echo "<br>";
echo "<br>";
for ($e=1;$e<=count($array[1]);$e++){
 if( $e%20==0){echo "<br>";}
 echo $array[2][$e]. "&nbsp"; 
}
}
 }
 imprime_array(crea_array($eleccion));
?>






    </body>

    </html>