<?php
require_once '../conexion.php'; 
$sql="SELECT * FROM tbl_alumne";

$query=mysqli_query($con,$sql);
if($query){echo "givenname,name,firstname,lastaname,password,description \n";
    while($r=$query->fetch_object()){
        
        echo "J23".$r->nom_alu.";".$r->cognom1_alu."; qweQWE123 ;".$r->classe."\n";
    }
}
header('content-type: application/csv');
header('content-Disposition: attachment; filename=alumne.csv;');
