<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Update</title>
</head>
<body>
    
<?php
    include '../conexion.php';
    $dni = $_POST['dni'];
    $nom = $_POST['nom'];
    $ape1 = $_POST['cognom1'];
    $ape2 = $_POST['cognom2'];
    $telf = $_POST['telf'];
    $mail = $_POST['email'];
    $clase = $_POST['classe'];
    $id = $_POST['id'];

    /*$sql = "UPDATE `tbl_alumne` SET `nom_alu` = '$nom' WHERE `id_alumne`= `13`"; */
   $sql = "UPDATE `tbl_alumne` SET `dni_alu` = '$dni', `nom_alu` = '$nom', `cognom1_alu` = '$ape1', `cognom2_alu` = '$ape2', `telf_alu` = '$telf',  
   `email_alu` = '$mail', `classe`= '$clase' WHERE `id_alumne`= '$id'";
    mysqli_query($con, $sql);

?>

    <script src="//cdn.jsdelivr.net/npm/sweetalert2@11"></script>
    <script>
        function aviso(url) {
            Swal.fire({
                    title: 'Usuario modificado',
                    icon: 'success',
                    confirmButtonColor: '#3085d6',
                    confirmButtonText: 'Volver'
                })
                .then((result) => {
                    if (result.isConfirmed) {
                        window.location.href = url;
                    }
                })
        }
        aviso('../tabla.php');
    </script>

</body>
</html>