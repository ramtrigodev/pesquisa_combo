<?php
include 'pesquisar.php'
?>
<!doctype html>
<html>
<head>
<meta charset="utf-8">
<title>Untitled Document</title>
<!-- jQuery library -->
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.1.1/jquery.min.js"></script><!-- Via MaxCDN -->
</head>
 
<body>
<form action="" method="get">
 
<select name="area" id="area">    
    <option value="" selected = selected>Selecione uma área</option>
    <?php
    if($total > 0) {
        do {
        echo "<option value='".$linha['codigo']."'>".$linha['descricao']."</option>";
        }while($linha = mysqli_fetch_assoc($dados));
    }
    ?>
</select>
 

</body>
</html>
  