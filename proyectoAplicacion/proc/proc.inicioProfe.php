<?php 
    include '../conexion.php';

    $nom=$_POST['nombre'];
    $email=$_POST['correo'];
    $pwd= /* sha1 (  */$_POST['contra']/* ) */;

    session_start();
    $_SESSION['usuario']=$email;

    $consulta="SELECT * FROM tbl_professor WHERE nom_prof= '$nom' and email_prof='$email' and contraseña='$pwd'";
    $resultado=mysqli_query($con,$consulta);
    $filas=mysqli_num_rows($resultado);
    if($filas==1){
        header("location: ../tabla.php");
        } else{
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
<script src="//cdn.jsdelivr.net/npm/sweetalert2@11"></script>
    <script>
        function aviso(url) {
            Swal.fire({
                    title: 'el usuario no existe o datos incorrectos',
                    icon: 'error',
                    confirmButtonColor: '#3085d6',
                    confirmButtonText: 'Volver'
                })
                .then((result) => {
                    if (result.isConfirmed) {
                        window.location.href = url;
                    }
                })
        }
        aviso('../index.php');
<?php } ?>
</script>
</body>
</html>