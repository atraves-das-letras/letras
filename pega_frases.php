

<?php
// Criação de variáveis 
$nome = $_POST["nome"];
$frase = $_POST["frase"];

// Criação de variáveis para acessar o banco de dados 
$servidor = "localhost"; // servidor-computador 
$usuario = "root";        // usuário do banco de dados 
$senha = "";        // senha do banco de dados 
$bdnome = "sislogin";  // nome do banco de dados 

// Cria a conexão MySQLi Procedural
$conexao = mysqli_connect($servidor, $usuario, $senha, $bdnome);

if (!$conexao) // Se não conectar - checa a conexão -> connect_error
{
    echo "<h1>Falha na conexão: " . mysqli_connect_error() . "</h1>";
}

// Monta o SQL para executar no Banco de Dados
$sql = "INSERT INTO frases (nome,Frases) VALUES ('". $nome ."','" . $frase . "')";

if (mysqli_query($conexao, $sql)) 
{
    /*echo "<h1>Sua mensagem foi enviada com sucesso!!<br>Analisaremos o mais rápido possível.</h1>";*/
    print "<script>alert('Frase enviada com sucesso!Em instantes poderá ve-la em nosso site!');</script>";
    print "<script>location.href='Crie_suas_frases.html';</script>";
} 
else 
{
    print "<script>alert('Mensagem não enviada!');</script>";
      print "<script>location.href='homepage_3.php';</script>";
    /*echo "<h1>Error: " . $sql . "<br>" . mysqli_error($conexao) . "</h1>";*/
}

mysqli_close($conexao);	
?>

