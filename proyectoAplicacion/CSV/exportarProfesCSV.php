<?php
require_once '../conexion.php'; 
$sql="SELECT * FROM tbl_professor";

$query=mysqli_query($con,$sql);
if($query){echo "givenname,name,firstname,lastaname,password,description \n";
    while($r=$query->fetch_object()){
        
        echo "J23".$r->nom_prof.";".$r->cognom1_prof.";".$r->contraseña.";".$r->dept. "\n";
    }
}
header('content-type: application/csv');
header('content-Disposition: attachment; filename=profesores.csv;');
