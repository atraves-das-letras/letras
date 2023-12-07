 <!DOCTYPE html>
<html>
<head>
   <link rel='stylesheet' href='CSS/CSS PGS.css'>
   <meta charset="utf-8">
 </head>
<body>


<?php
$servidor = "localhost";
$usuario = "root";
$senha = "";
$dbnome = "sislogin";

//conexão

$conexao = mysqli_connect($servidor, $usuario, $senha, $dbnome);

//checa conexão

if(!$conexao) // Se não conectar - checa a conexão -> connect_error
{
echo "<h1> Falha na conexão : " .  mysqli_connect_error() ."</h1>";
}
// Monta o SQL para executar no Banco de Dados

$sql = "SELECT *  FROM frases";

//Aplica a consulta ao Banco de Dados
$consultaSQL = mysqli_query($conexao, $sql);

if (mysqli_num_rows($consultaSQL) > 0) //Cria uma tabela colocando cada registro do BD em uma nova linha 
{

echo "<table class='w3-table'>";
echo  "<div class=titulo>";
echo   "<h1>Nome</h1>";
echo   "<h1>frases</h1>";
echo "</div>";
 
while($linha = mysqli_fetch_assoc($consultaSQL))
{
echo "<div >";
echo "<div >";
echo "<span>" . $linha["nome"] ."</span>";
echo "<span>" . $linha["Frases"]."</span>";
echo "</div>";

}
}
else
{
echo "<h1>Não existem Usuários Cadastrados</h1>";
}
mysqli_close($conexao);

?>
</body>
</html> 