<?php
include("conexion.php");
if (isset($_POST['registerC'])) {
    if(
        strlen($_POST['nombre' ]) >= 1 &&
        strlen($_POST['apellido']) >= 1 &&
        strlen($_POST['correo']) >= 1 &&
        strlen($_POST['contraseña']) >= 1 &&
        strlen($_POST['departamento']) >= 1 &&
        strlen($_POST['municipio']) >= 1 
       ) {
            $nombre = trim($_POST['nombre']);
            $apellido = trim($_POST['apellido']);
            $correo = trim($_POST['correo']);
            $contraseña = trim($_POST['contraseña']);
            $departamento = trim($_POST['departamento']);
            $municipio = trim($_POST['municipio']);
            $consulta = "INSERT INTO compradores( nombre, apellido, correo, contraseña, departamento, municipio)
                VALUES ( '$nombre', '$apellido', '$correo', '$contraseña', '$departamento', '$municipio')";
            $resultado = mysqli_query($conex, $consulta);
            if ($resultado) {
                header ("location: bienvenido.php")
             ?>
                <h3 class="success" >Tu resgistro se a completado</h3>
             <?php
            } else {
             ?>
                <h3 class="error">Ocurrio un error</h3>
             <?php
            }
        } else {
            ?>
                <h3 class="error">Llena todos los campos </h3>
            <?php
        }
}
?>