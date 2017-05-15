<?php

?>

<html>
<head>
<title> Recebendo Váriaveis </title>
</head>
<body>
<?php
$mensagem = $_GET['mensagem'];
$nome = $_GET['nome'];
echo "nome: $nome <br> mensagem: $mensagem";
?>
</body>
</html>