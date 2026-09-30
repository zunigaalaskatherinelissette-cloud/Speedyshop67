 <?php
session_start(); // <-- Iniciar sesión al inicio
include("conexion.php");

if (isset($_POST['registerV'])) {
    if(
        strlen($_POST['nombre']) >= 1 &&
        strlen($_POST['apellido']) >= 1 &&
        strlen($_POST['correo']) >= 1 &&
        strlen($_POST['contraseña']) >= 1 &&
        strlen($_POST['agromercado']) >= 1 &&
        strlen($_POST['departamento']) >= 1 &&
        strlen($_POST['municipio']) >= 1 
       ) {

        $nombre = trim($_POST['nombre']);
        $apellido = trim($_POST['apellido']);
        $correo = trim($_POST['correo']);
        $contraseña = trim($_POST['contraseña']);
        $agromercado = trim($_POST['agromercado']);
        $departamento = trim($_POST['departamento']);
        $municipio = trim($_POST['municipio']);

        // Insertar en la base de datos
        $consulta = "INSERT INTO vendedores(nombre, apellido, correo, contraseña, agromercado, departamento, municipio)
                     VALUES ('$nombre', '$apellido', '$correo', '$contraseña', '$agromercado', '$departamento', '$municipio')";
        $resultado = mysqli_query($conex, $consulta);

        if ($resultado) {
            // Crear sesión automáticamente al registrarse
            $id_vendedor = mysqli_insert_id($conex); // Obtener el ID recién insertado
            $_SESSION['id_vendedor'] = $id_vendedor;
            $_SESSION['nombre_vendedor'] = $nombre;

            // Redirigir al panel de productos
            header("Location: homeV.php");
            exit;
        } else {
            echo '<h3 class="error">Ocurrió un error al registrarse. Intenta nuevamente.</h3>';
        }

    } else {
        echo '<h3 class="error">Llena todos los campos correctamente.</h3>';
    }
}
?>
