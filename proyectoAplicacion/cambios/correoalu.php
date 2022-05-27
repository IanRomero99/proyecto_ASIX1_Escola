<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>ALUMNOS</title>
    <link rel="stylesheet" href="../css/styles.css">
</head>
<body>
<?php



$id = $_GET['id'];

?>

<div class="fondo_correo">
<form action="../enviarcorreo.php?id=<?php echo $id; ?> " method="post">
<h1>ENVIAR CORREO</h1>
<h2>ASUNTO</h2>
<div class="asunto_correo">
        <input  class="asunto_correo" type="text" name="asunto" placeholder="Escribe el asunto...">
        </div>
        <div class="mensaje_correo">
<h2>MENSAJE</h2>
        <input class="mensaje_correo" type="textarea" name="mensaje" placeholder="Escribe el mensaje..." >
        </div>
        <br>
        <br>
        <input type="submit" value="Enviar">
        </form>
        </div>
</body>

</html>