<?php
include_once("conexion.php");
if (!empty($_POST)) {

    $usuario=$_POST['txtuser'];
    $clave=$_POST['txtpass'];

    $sql="SELECT rol FROM usuarios where id_usuario='$usuario' and contrasena=$clave ;";
    $result = $conexion->query($sql);

    $rows=$result->num_rows;

    if ($rows>0){
        $row=$result->fetch_assoc();

        $perfil=$row['rol'];
        switch($perfil){
            case 1:
            header("location:admin.php");
            break;
            case 2:
            header("location:user.php");
            break;
        }
    }else{
        $mensaje="usuario y/o clave incorrectos";
        header("location.index.php?mensaje=$mensaje");
    }
}

?>