<?php
 
require_once('conexao.php');
 
$sql = "SELECT * FROM categorias";
$dados = mysqli_query($conn,$sql) or die(mysql_error());
$linha = mysqli_fetch_assoc($dados);
$total = mysqli_num_rows($dados);
 
// Verifica se a conexão não funcionou...
if (!$conn) {
    die("A conexão com o banco de dados falhou: " . mysqli_connect_error());
}
else {
   
    mysqli_close($conn);
    }
   
?>