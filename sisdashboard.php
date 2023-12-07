<?php
session_start();
if(empty($_SESSION)){

}
?>

<!<html>
<head>
<title> Cadastro de Usuário </title>
</head>
<body>
    <h1> Seja bem vindo!!</h1>
   <?php
    print"Olá, " .$_SESSION["nome"];
    print"<a href='sislogout.php'>Sair</a>";
    ?>
</body>
</html>---