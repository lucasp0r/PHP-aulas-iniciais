<?php

?>

<html>
<head>
<title> Enviando Váriaveis </title>
</head>
<body>
<?php
$variavel = "Enviando Váriaveis";
$nome = "Hugo Vasconcelos";
?>
<a href = "recebe.php ?mensagem =<?php echo $variavel; ?> &nome=<?php echo $nome; ?> " >Clique aqui para enviar </a>
</body>
</html>