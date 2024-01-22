<?php
$servername = "localhost";
$username = "root";
$password = ""; //deixe em branco caso não tenha
$database = "linkuse";
 
// Cria uma conexão
$conn = mysqli_connect($servername, $username, $password, $database);
 
//Altera o padrão de caracteres
mysqli_set_charset($conn, "utf8");
 
// Verifica o status da conexão
if (!$conn) {
    die("A conexão com o banco de dados falhou: " . mysqli_connect_error());
}
 
?>