<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.13.0/css/all.min.css">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">
    
    
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-giJF6kkoqNQ00vy+HMDP7azOuL0xtbfIcaT9wjKHr8RbDVddVHyTfAAsrekwKmP1" crossorigin="anonymous">
    
    <link rel="stylesheet" href="styles.css">
    
    <title>Inicio</title>
</head>
<body>

    <img src="img/fes.png" alt="" class="fes">
    <img src="img/unam.png" alt="" class="unam">

    <div class="contenedor">
        <h1 class="titulo">SEGURIDAD INFORMATICA </h1>
        <h1 class="titulo">CIFRADO CESAR</h1>

        <hr class="linea">

        <pre class="integrantes">
        <span>Integrantes:</span>
            <span>A</span>cevedo <span>F</span>lores <span>E</span>rika.
            <span>C</span>arreon <span>C</span>havez <span>J</span>uan <span>M</span>anuel.
            <span>D</span>elgadillo <span>M</span>ontes <span>F</span>ranco <span>J</span>osué.
            <span>F</span>lores <span>D</span>íaz <span>R</span>aymundo <span>A</span>ntonio.
            <span>P</span>eredo <span>M</span>endez <span>S</span>alvador <span>A</span>lejandro.
        </pre>

        <p class ="botones">
            <a class="btn btn-primary" data-bs-toggle="collapse" href="#formularioCifrar" role="button" aria-expanded="false" aria-controls="collapseExample">
                Cifrar
            </a>
            <a class="btn btn-primary" data-bs-toggle="collapse" href="#formularioDescifrar" role="button" aria-expanded="false" aria-controls="collapseExample">
                Descifrar
            </a>
        </p>
            <div class="collapse" id="formularioCifrar">
                <div class="card card-body">
                    <form action="encriptar.php" method="POST" class="formulario">
                        <div class="form-group">

                            <textarea name="mensaje" cols="30" rows="1" placeholder="Agrega el texto que quieras cifrar..."></textarea>
                            
                            <input type="submit" value="Cifrar" class="boton" />
                        </div>
                    </form>
                </div>
            </div>

            <div class="collapse" id="formularioDescifrar">
                <div class="card card-body">
                    <form action="descifrar.php" method="POST" class="formulario">
                        <div class="form-group">

                            <textarea name="cifrado" cols="30" rows="1" placeholder="Agrega el texto que quieras descifrar..."></textarea>
                            
                            <input type="submit" value="Descifrar" class="boton" />
                        </div>
                    </form>
                </div>
            </div>
    </div>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta1/dist/js/bootstrap.bundle.min.js" integrity="sha384-ygbV9kiqUc6oa4msXn9868pTtWMgiQaeYH7/t7LECLbyPA2x65Kgf80OJFdroafW" crossorigin="anonymous"></script>
</body>
</html>