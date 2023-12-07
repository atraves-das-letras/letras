<!DOCTYPE html>
 <html>
 <head>
   <link rel='stylesheet' href='CSS/site.css'>
   <meta charset="utf-8">
 </head>
 <body>

<?php
/* 
echo "Meu primeiro script PHP!";
*/
?>

<?php
/* Descomente este código para ver os valores digitados no formulário
Veja o conceito de variável
 echo "<h1>Nome =" .$_POST["nome"] ."</h1>"; 
 echo "<h1>E-mail =". $_POST["e_mail"] ."</h1>"; 
 echo "<h1>Senha =". $_POST["senha"]."</h1>"; 
*/
// Criação de variáveis 
$cod_usuario = $_GET["cod_usuario"];


// Criação de variáveis para acessar o banco de dados 

$servidor = "localhost"; // servidor-computador 
$usuario = "root";        // usuário do banco de dados 
$senha = "";        // senha do banco de dados 
$bdnome = "cadastro";  // nome do banco de dados 

//cria a conexão MySQLi Procedural
$conexao = mysqli_connect($servidor, $usuario, $senha, $bdnome);

if(!$conexao) // Se não conectar - checa a conexão -> connect_error
{
echo "<h1> Falha na conexão : " .  mysqli_connect_error() ."</h1>";
}

// Monta o SQL para executar no Banco de Dados

$sql = "DELETE FROM USUARIO 
        WHERE cod_usuario =  '".$cod_usuario."'";

 
/* Descomentar para ver o comando SQL que será executado no Banco de dados*/ 


echo "<h1>".$sql ."</h1>"; 



if (mysqli_query($conexao, $sql)) {
      echo "<h1>Registro Excluido com Sucesso</h1>";
    } else {
      echo "<h1>Error: " . $sql . "<br>" . mysqli_error($conexao) ."</h1>";
    }
    
    mysqli_close($conexao);


?>

<a href="cadastra_usuario.html"><input type="submit" value="VOLTAR"></a>
</body>
</html> 