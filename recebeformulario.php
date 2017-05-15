<?php
	$nome = $_POST['nome'];
	$titulopagina=$_POST['titulo'];

?>
<html>
<head>
<title> <?php echo $titulopagina ?> </title>
</head>
<body>

Seu nome é: <br>
<h2>
   <?php echo  $nome?>
</h2>
</body>
</html>