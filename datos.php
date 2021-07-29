<?php 

error_reporting(0);
$sql = "INSERT INTO personas( nya, sexo, estado, domicilio, cp, tdoc, ndoc, cel) 
VALUES ('$nya','$sexo','$estado','$domicilio','$cp','$tdoc','$ndoc','$cel')";

$guardarDatos = mysqli_query($conn, $sql);

if(!$guardarDatos){
  echo"hubo un error";
}

?>
