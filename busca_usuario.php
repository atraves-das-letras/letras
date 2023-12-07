 <!DOCTYPE html>
<html>
<head>
   <link rel='stylesheet' href='CSS/site.css'>
   <link rel='stylesheet' href='CSS/classes.css'>
   <meta charset="utf-8">
 </head>
<body>
<h1><a href="cadastra_usuario.html">Novo Usuário</a></h1>

<?php
$servidor = "localhost";
$usuario = "root";
$senha = "";
$dbnome = "sislogin";


// Criação de variáveis 
$usuario = $_GET["usuario"];

//conexão

$conexao = mysqli_connect($servidor, $usuario, $senha, $dbnome);

//checa conexão

if(!$conexao) // Se não conectar - checa a conexão -> connect_error
{
echo "<h1> Falha na conexão : " .  mysqli_connect_error() ."</h1>";
}
// Monta o SQL para executar no Banco de Dados

$sql = "SELECT *  FROM usuario WHERE cod_usuario =  '".$usuario."'";

//Aplica a consulta ao Banco de Dados
$consultaSQL = mysqli_query($conexao, $sql);

if (mysqli_num_rows($consultaSQL) > 0) //Cria uma tabela colocando cada registro do BD em uma nova linha 
{   
// Enquanto houver registro da consulta. Fetch = Busca o próximo
while($linha = mysqli_fetch_assoc($consultaSQL))
{
  echo "<div id='formulario'>";
  echo "<form action='altera_usuario.php' method='post'>";
  echo "  <h1>Usuário</h1>";
  echo "    <label for='nome'>Código:</label>";
  echo "    <input type='text' id='cod_usuario' name='cod_usuario' value='". $linha["cod_usuario"]."'><br><br>";
  echo "    <label for='nome'>Nome:</label>";
  echo "    <input type='text' id='nome' name='nome' value='". $linha["nome"]."'><br><br>";
  echo "    <label for='e-mail'>e-mail:</label>";
  echo "   <input type='text' id='e-mail' name='e_mail' value='".$linha["e_mail"]."'><br><br>";
  echo "   <label for='senha'>senha:</label>";
  echo "    <input type='text' id='senha' name='senha' value='". $linha["senha"]."'><br><br>";
  echo "   <input type='submit' name='alterar' value='Alterar'>";
  echo "   <a href ='exclui_usuario.php?cod_usuario=" . $linha["cod_usuario"]."'><input type='button' name='excluir' value='Excluir'> </a>";
  echo "  </div>  ";
  echo " </form>";

 
}

}
else  // Esse else é do if (mysqli_num_rows($consultaSQL) > 0) 
{
echo "<h1>Não existem Usuários Cadastrados</h1>";
}
mysqli_close($conexao);

?>
</body>
</html> 