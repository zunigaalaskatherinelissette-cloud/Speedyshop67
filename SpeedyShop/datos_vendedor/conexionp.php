 <?php
$conex = mysqli_connect("localhost", "root", "", "speedyshop");
if (!$conex) {
    die("❌ Error: " . mysqli_connect_error());
}
// echo "✅ Conexión exitosa";
?>
