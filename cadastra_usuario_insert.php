<?php


$servidor = "localhost"; // servidor-computador 
$usuario_bd = "root";    // usuário do banco de dados (alterei para evitar conflito com a variável anterior)
$senha_bd = "";          // senha do banco de dados 
$bdnome = "sislogin";    // nome do banco de dados 

$nome = $_POST["nome"];
$email = $_POST["email"];
$senha_user = $_POST["senha"];
$usuario = $_POST["usuario"]; // Adicione o ponto e vírgula aqui


// Cria a conexão MySQLi Procedural
$conexao = mysqli_connect($servidor, $usuario_bd, $senha_bd, $bdnome);

if(!$conexao) // Se não conectar - checa a conexão -> connect_error
{
    echo "<h1> Falha na conexão : " .  mysqli_connect_error() ."</h1>";
}

// Monta o SQL para executar no Banco de Dados
$sql = "INSERT INTO usuarios (nome, email, usuario, senha)
        VALUES ('".$nome."','".$email."','".$usuario."','".$senha_user."')"; // Corrigi as aspas e a concatenação

/* 
Descomentar para ver o comando SQL que será executado no Banco de dados

echo "<h1>".$sql ."</h1>"; 
*/ 
if (mysqli_query($conexao, $sql)) 
{
    print "<script>alert('Cadastro feito com sucesso!!');</script>";
    print "<script>location.href='Homepage_5.php';</script>";
} else 
{
    echo "<h1>Error: " . $sql . "<br>" . mysqli_error($conexao) ."</h1>";
}
mysqli_close($conexao);
?>