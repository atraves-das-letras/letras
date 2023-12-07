<?php
/* Descomente este código para ver os valores digitados no formulário
Veja o conceito de variável
 echo "<h1>Nome =" .$_POST["nome_cad] ."</h1>"; 
 echo "<h1>E-mail =". $_POST["e_mail"] ."</h1>"; 
 echo "<h1>Senha =". $_POST["senha"]."</h1>"; 
*/
// Criação de variáveis 
$nome = $_POST["nome"];
$email =$_POST["email"];
$assunto =$_POST["assunto"];
$mensagem = $_POST["mensagem"];


// Criação de variáveis para acessar o banco de dados 

$servidor = "localhost"; // servidor-computador 
$usuario = "root";        // usuário do banco de dados 
$senha = "";        // senha do banco de dados 
$bdnome = "sislogin";  // nome do banco de dados 

//cria a conexão MySQLi Procedural
$conexao = mysqli_connect($servidor, $usuario, $senha, $bdnome);

if(!$conexao) // Se não conectar - checa a conexão -> connect_error
{
echo "<h1> Falha na conexão : " .  mysqli_connect_error() ."</h1>";
}

// Monta o SQL para executar no Banco de Dados

$sql = "INSERT INTO Contato (Nome, Email, Assunto, mensagem)
        VALUES ('".$nome."','".$email."','".$assunto."','".$mensagem."')";

/* 
Descomentar para ver o comando SQL que será executado no Banco de dados

echo "<h1>".$sql ."</h1>"; 

*/ 
if (mysqli_query($conexao, $sql)) 
{
      print "<script>alert('Mensagem enviada com sucesso!');</script>";
    print "<script>location.href='homepage_3.php';</script>";
} else 

{
      print "<script>alert('Mensagem não enviada!');</script>";
      print "<script>location.href='homepage_3.php';</script>";
	  
}
mysqli_close($conexao);	

?>

