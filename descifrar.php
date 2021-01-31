<?php

# REIBIMOS EL MENSAJE POR MEDIO DEL FORMULARIO
$mensaje = $_POST['cifrado'];


# CONVERTIMOS LA CADENA A SOLO LETRAS MAYUSCULAS
$mensaje = strtoupper($mensaje);

# OBTENEMOS EL TAMAÑO DE LA CADENA
$tamano =  strlen($mensaje);

# ARREGLO DONDE IREMOS CUARDANDO EL MENSAJE CIFRADO
$arreglo = [];

# RECORREMOS TODO EL MENSAJE INGRESADO
for ($pos=0; $pos <= $tamano ; $pos++) {

  $resultado1 = $mensaje[$pos];

  # array_push SIRVE PARA AGREGAR UN ELEMENTO A UN ARRAY

  if($resultado1 == 'A'){ # SI LA LETRA ES UNA A SE ASIGNA LA LETRA X
    array_push($arreglo, 'X');
  } else if($resultado1 == 'B') { # SI LA LETRA ES UNA B SE ASIGNA LA LETRA Y
    array_push($arreglo, 'Y');
  } else if($resultado1 == 'C'){ # SI LA LETRA ES UNA C SE ASIGNA LA LETRA Z
    array_push($arreglo, 'Z');
  } else if($resultado1 == ' '){ # SI ES UN ESPACIO SE GUARDA IGUAL
    array_push($arreglo, ' ');
  } else { # EN CASO DE QUE NO SEA X, Y Ó Z SE REVISAN LAS DEMAS LETRAS
    for ($i = 65; $i <= 90; $i++){
        $letra = chr($i);

        if($resultado1 == $letra){
            # echo $letra . ' esta es <br/>';
            $resultado = chr($i - 3); # RESTA 3 POSICIONES EN EL ABEVEDARIO
            array_push($arreglo, $resultado); # LO AGREGAMOS AL ARRAY    
        } 
    }
  }
}

$descifrado = implode("", $arreglo); # CONVERTIMOS NUESTRO ARRAY A UN STRING 
# echo $cifrado;*/
?>


<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">

  <link rel="stylesheet" href="styles.css">

  <title>Resultado</title>
</head>
<body>
  
  <img src="img/fes.png" alt="" class="fes">
  <img src="img/unam.png" alt="" class="unam">
  <div class="contenedor">

    <h1 class="titulo">CIFRADO</h1>

    <hr class="linea">

    <p class="texto">La cadena cifrada ingresada es: <span><?php echo $mensaje; ?></span> </p>
    <p class="texto">La cadena descifrada es: <span><?php echo $descifrado; ?></span> </p>

    <a href="index.php" class="regresar">Regresar</a>
  </div>
</body>
</html>