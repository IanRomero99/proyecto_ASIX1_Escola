<?php
    include '../conexion.php';  
    //mostrar datos
    if (empty($_GET['id'])) {
        header('location:../tabla.php');
    }
    $iduser=$_GET['id'];                            
    
    $sql = "SELECT * FROM tbl_alumne WHERE id_alumne=$iduser";
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
        <!-- ESTILOS CSS -->
        <link rel="stylesheet" href="../css/styles.css">
        <!-- SCRIPTS -->
        <script type="text/javascript" src="../js/formulario.js"></script>
        <!-- TITULO -->
        <title>Creación de Usuario</title>
    </head>

    <body class="cuerpoInicio body">
        <?php
                $resultado = mysqli_query($con,$sql);
                while ($campo=mysqli_fetch_assoc($resultado)) { ?>
            
                    <div id="contContTitulo">
                        <div id="contTitulo">
                            <h1 id="titulo" class="flex">Editar Alumno <?php echo $campo['nom_alu']; ?> </h1>
                        </div>
                    </div>
                    <div id="contenedormodi">
                        <div id="contenedormodi">
                            <div>
                                <form action="./updateAlumno.php" method="post">
                                    <input type='hidden' value="<?php echo $campo['id_alumne']; ?>" name="id">
                                    <div class="usu">
                                        <div class="column2mod">
                                            <p>DNI <input type='text' value="<?php echo $campo['dni_alu']; ?>" name="dni"></p>
                                        </div>
                                        <div class="column2mod">
                                            <p>NOMBRE <input type='text' value="<?php echo $campo['nom_alu']; ?>" name="nom"></p>
                                        </div>
                                    </div>
                                    <div class="usu">
                                        <div class="column2mod">
                                            <p>1r Apellido <input type='text' value="<?php echo $campo['cognom1_alu']; ?>" name="cognom1"></p>
                                        </div>
                                        <div class="column2mod">
                                            <p>2o Apellido <input type='text' value="<?php echo $campo['cognom2_alu']; ?>" name="cognom2"></p>
                                        </div>
                                    </div>
                                    <div class="usu">
                                        <div class="column2mod">
                                            <p>Telefono <input type='number' value="<?php echo $campo['telf_alu']; ?>" name="telf"></p>
                                        </div>
                                        <div class="column2mod">
                                            <p>DNEmailI <input type='text' value="<?php echo $campo['email_alu']; ?>" name="email"></p>
                                        </div>
                                    </div>
                                    <div class="usu">
                                        <div class="column1mod">
                                            <p>Clase<input type='number' value="<?php echo $campo['classe']; ?>" name="classe"></p>
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