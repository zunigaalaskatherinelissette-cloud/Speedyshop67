 <?php
class Database 
{
    private $hostname = "sql112.infinityfree.com";
    private $database = "SpeedyShop";
    private $username = "root";
    private $password = "mg23512629A25"; 
    private $charset = "utf8";

    function conectar()
    {
        try {
            $conexionc = "mysql:host=" . $this->hostname . ";dbname=" . $this->database . ";charset=" . $this->charset;
            $option = [
                PDO::ATTR_ERRMODE => PDO::ERRMODE_EXCEPTION,
                PDO::ATTR_EMULATE_PREPARES => false
            ];

            
            $pdo = new PDO($conexionc, $this->username, $this->password, $option);

            return $pdo;
        } catch (PDOException $e) {
            echo 'Error conexión: ' . $e->getMessage();
            exit;
        }
    }
}