<?php
    include '../conexion.php';  
    //mostrar datos
    if (empty($_GET['id'])) {
        header('location:../tabla.php');
    }
    $iduser=$_GET['id'];                            
    
    $sql = "SELECT * FROM tbl_professor WHERE id_professor=$iduser";
    $lista = mysqli_query($con,$sql);
?>
    <!DOCTYPE html>
    <html lang="en">

    <head>
        <meta charset="UTF-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <!-- BOOTSTRAP -->
        <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
        <!-- GOOGLE FONTS -->
        <link rel="preconnect" href="https://fonts.googleapis.com">
        <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
        <link href="https://fonts.googleapis.com/css2?family=Radio+Canada:wght@300&family=Ubuntu+Condensed&display=swap" rel="stylesheet">
        <!-- DROPDOWN -->
        <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
        <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>
        <!-- ESTILOS CSS -->
        <link rel="stylesheet" href="../css/styles.css">
        <!-- SCRIPTS -->
        <script type="text/javascript" src="./js/bbdd.js"></script>
        <script type="text/javascript" src="./js/filtro.js"></script>
        <script type="text/javascript" src="./js/exportar.js"></script>
        <!-- TITULO -->
        <title>Contenido de la Base de Datos</title>
    </head>

    <body class="cuerpoInicio body">
        <?php
                $resultado = mysqli_query($con,$sql);
                while ($campo=mysqli_fetch_assoc($resultado)) { ?>
            
                    <div id="contContTitulo">
                        <div id="contTitulo">
                            <h1 id="titulo" class="flex">Editar Professor <?php echo $campo['nom_prof']; ?> </h1>
                        </div>
                    </div>
                    <div id="contenedormodi">
                        <div id="contenedormodi">
                            <div>
                                <form action="./updateProfesor.php" method="post">
                                    <input type='hidden' value="<?php echo $campo['id_professor']; ?>" name="id">
                                    <div class="usu">
                                        <div class="column2mod">
                                        <p>NOMBRE <input type='text' value="<?php echo $campo['nom_prof']; ?>" name="nombre"></p>
                                        </div>
                                        <div class="column2mod">
                                        <p>1r Apellido <input type='text' value="<?php echo $campo['cognom1_prof']; ?>" name="apellido1"></p>
                                        </div>
                                    </div>
                                    <div class="usu">
                                        <div class="column2mod">
                                        <p>2o Apellido <input type='text' value="<?php echo $campo['cognom2_prof']; ?>" name="apellido2"></p>
                                        </div>
                                        <div class="column2mod">
                                        <p>EmailI <input type='text' value="<?php echo $campo['email_prof']; ?>" name="email"></p>
                                        </div>
                                    </div>
                                    <div class="usu">
                                        <div class="column2mod">
                                        <p>Telefono <input type='number' value="<?php echo $campo['telf']; ?>" name="telef"></p>
                                        </div>
                                        <div class="column2mod">
                                        <p>Clase<input type='number' value="<?php echo $campo['dept']; ?>" name="dept"></p>
                                        </div>
                                    </div>
                                    <div class="usu">
                                        <div class="column1mod">
                                        <p>Contraseña <input type='text' value="<?php echo $campo['contraseña']; ?>" name="email"></p>
                                        </div>
                                    </div>
                                    <?php } mysqli_free_result($resultado); ?>
                                    <div class="row">
                                        <div class="colummn1mod">
                                            <input type='submit' value='actualizar'>
                                        </div>
                                    </div>

                                </form>
                            </div>

                        </div>
                    </div>
                
            
    </body>
    </html>