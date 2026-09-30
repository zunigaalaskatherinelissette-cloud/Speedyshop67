<?php 
     $conex =new mysqli("sql112.infinityfree.com","if0_39714708","","speedyshop");
     $conex -> set_charset("utf8");

     if ($conex->connect_error) {
    die("Error de conexión: " . $conex->connect_error);
}

  ?>