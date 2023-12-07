
<!DOCTYPE html>
<head>
  <meta charset="utf-8">
  <title>Atraves das letras</title>
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <link rel="stylesheet" type="text/css" href="CSS/css_cadastro e login.css">
  <link rel="shortcut icon" href="pictures\icon\frases-logo.ico" type="image/x-icon">
  <script src="https://kit.fontawesome.com/a076d05399.js"></script>

  <nav>
      <input type="checkbox" id="check">
      <label for="check" class="checkbtn">
          <i class="fas fa-bars"></i>
      </label>
      <label class="logo">Atraves das letras</label>
      <ul>
          <li><a class="active" href="Homepage_3.html">Início</a></li>
     
      </ul>
  </nav>
  <section>
  </section>
</head>
<body>
  <div class="container" >
    <a class="links" id="paracadastro"></a>
    <a class="links" id="paralogin"></a>
     
    <div class="content">      
      <!--FORMULÁRIO DE LOGIN-->
      <div id="login">
      <form method="POST" action="sislogin.php">
          <h1>Login</h1> 
          <p> 
            <label for="usuario">Seu usuario:</label>
            <input id="usuario" name="usuario" required="required" type="text" placeholder="ex: LETRAS123"/>
          </p>
           
          <p> 
            <label for="senha">Sua Senha</label>
            <input id="senha" name="senha" required="required" type="password" placeholder="ex: Sua senha" /> 
          </p>
           
          <p> 
            <input type="checkbox" name="manterlogado" id="manterlogado" value="" /> 
            <label for="manterlogado">Manter-me logado</label>
          </p>
           
          <p> 
      
         <input type="submit" value="LOGAR" id="cadastrar" name="cadastrar">
          </p>
           
          <p class="link">
            Ainda não tem conta?
            <a href="PG cadastro.html">Cadastre-se</a>
          </p>
        </form>
      </div>
    </div>
</body>
</html>
