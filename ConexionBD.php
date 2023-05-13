<?php
include("DB_paginaW.php");
if(!$conexion){
    echo "fallo la conexion al servidor";
}
else{
    echo "todo ok no matter what ";
}

if(strlen($_POST["nombre"]) >= 1 && strlen($_POST["apellido"]) >= 1 && strlen($_POST["correo"]) >= 1 ){
    $name=trim($_POST["nombre"]);
    $apellidos=trim($_POST["apellido"]);
    $correo=trim($_POST["correo"]);
    $DB="registrouss";
    $DB_con=mysqli_select_db($conexion,$DB);

    $consulta="INSERT INTO usuarios (nom, ape, mail) VALUES ('$name','$apellidos','$correo')";
    $resultado=mysqli_query($conexion,$consulta);

    if(!$resultado){
        echo "no";
    }
    else{
        echo "  ¡Te has registrado correctamente! Saltemos en un pie";
    }
}

?>