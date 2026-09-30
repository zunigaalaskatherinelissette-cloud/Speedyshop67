 <?php
// Mostrar errores (solo para depuración)
error_reporting(E_ALL);
ini_set('display_errors', 1);

// Conexión
include("conexion.php");

// Verificar si se presionó el botón login
if (isset($_POST["login"])) {

    // Obtener datos
    $correo = $_POST["correo"];
    $contraseña = $_POST["contraseña"];

    // Validar si están vacíos
    if (empty($correo) || empty($contraseña)) {
        echo '<div style="color:red;">LOS CAMPOS ESTÁN VACÍOS</div>';
    } else {
        // Limpiar entradas para evitar inyección
        $correo = $conex->real_escape_string($correo);
        $contraseña = $conex->real_escape_string($contraseña);

        // Consulta a la base de datos
        $sql = $conex->query("SELECT * FROM compradores WHERE correo = '$correo' AND contraseña = '$contraseña'");
        

        if ($sql && $sql->num_rows > 0) {
            // Usuario encontrado → redirigir
            header("Location: bienvenido.php");
            exit();
        } else {
            echo '<div style="color:red;">ACCESO DENEGADO: email o contraseña incorrectos</div>';
        }
    }
}
?>