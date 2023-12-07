<!DOCTYPE html>
<html lang="pt-br">

<head>
    <meta charset="utf-8">
    <title>Através das letras</title>
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" type="text/css" href="CSS/style.css">
    <link rel="stylesheet" type="text/css" href="CSS/">
    <link rel="shortcut icon" href="pictures/icon/frases-logo.ico" type="image/x-icon">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link href="https://fonts.googleapis.com/css2?family=Quicksand&display=swap" rel="stylesheet">

</head>

<body>
    <section class="main_header container">
        <nav class="bg line">
        <a href="Homepage_3.php" id="fotim" title="Home"><img src="pictures\Frases-removebg-preview.png"></a>
            <a href="sisindex.php" title="Acessar Perfil">Acessar Perfil</a>
            <a href="Cadastro.html" title="Criar conta">Criar conta</a>
            <a href="Sobre nós .html" title="Sobre Nós">Sobre Nós</a>

        </nav>
    </section>
    <br><br><br><br>
    <div class="clock">
        <h1>Seja muito bem vindo</h1>
        <br><br>
        <h2>Nós temos as melhores frases para o seu proveito</h2>
    </div>
    <br><br>
    <div class="Slider">
        <div class="slides">
            <!--Radio Buttons-->
            <input type="radio" name="radio-btn" id="radio1">
            <input type="radio" name="radio-btn" id="radio2">
            <input type="radio" name="radio-btn" id="radio3">
            <!--Fim dos Radio Buttons-->
            <!--Slider img-->
            <div class="slide first">
                <img src="pictures\Frase do mes.jpg" alt="imagem 1">
            </div>
            <div class="slide">
                <img src="pictures\_Frase do dia.jpg" alt="imagem 2">
            </div>
            <div class="slide">
                <img src="pictures\_Frase do sem.jpg" alt="imagem 3">

            </div>

            <!--Fim do Slider img-->
            <!--navegaçao auto-->
            <div class="navigation-auto">
                <div class="auto-btn1"></div>
                <div class="auto-btn2"></div>
                <div class="auto-btn3"></div>
            </div>

        </div>
        <div class="manual-navegation">
            <label for="radio1" class="manual-btn"></label>
            <label for="radio2" class="manual-btn"></label>
            <label for="radio3" class="manual-btn"></label>

        </div>
        <script src="script carrosel.js"></script>
    </div>
    <br><br><br>
    <h1>Estas são as categorias</h1>
    <br><br><br>
    <div class="container">
        <div class="container1">
            <div class="Swiper-slide card">
                <div class="card-content">
                    <div class="image">
                        <img src="pictures\amizade fotinha.jpg" alt="">
                    </div>
                    <div class="name-profession">
                        <span class="profession">Verdadeiras amizades perpetuam pelo tempo</span>
                    </div>
                    <div class="button">
                        <button><a href="PG amizade.html">Amizade</a></button>
                    </div>
                </div>
            </div>

            <div class="Swiper-slide card">
                <div class="card-content">
                    <div class="image">
                        <img src="pictures/fotinha conquista.jpg" alt="">
                    </div>
                    <div class="name-profession">
                        <span class="profession">Algumas conquista podem demorar muito</span>
                    </div>
                    <div class="button">
                        <button><a href="PG conquista.html">Conquista</a></button>
                    </div>
                </div>
            </div>
            <div class="Swiper-slide card">
                <div class="card-content">
                    <div class="image">
                        <img src="pictures\filosoficas.jpg" alt="">
                    </div>
                    <div class="name-profession">
                        <span class="profession">Qual a verdade do universo?</span>
                    </div>
                    <div class="button">
                        <button><a href="PG filosoficas.html">Filosoficas</a></button>
                    </div>
                </div>
            </div>
        </div>
        <div class="container2">
            <div class="Swiper-slide card">
                <div class="card-content">
                    <div class="image">
                        <img src="pictures/felicids.jpg" alt="">
                    </div>
                    <div class="name-profession">
                        <span class="profession">Pode ser encontrada tanto no final como durante o percurso.</span>
                    </div>
                    <div class="button">
                        <button><a href="PG felicidade.html">Felicidade</a></button>
                    </div>
                </div>
            </div>
            <div class="Swiper-slide card">
                <div class="card-content">
                    <div class="image">
                        <img src="pictures\Bandeira_do_Maranhão.svg.png" alt="">
                    </div>
                    <div class="name-profession">
                        <span class="profession">valorizando nossa terra, nossa historia, enriquecemos nossa essencia!</span>
                    </div>
                    <div class="button">
                        <button><a href="PG frases maranhenses.html">Frases Maranhenses</a></button>
                    </div>
                </div>
            </div>
            <div class="Swiper-slide card">
                <div class="card-content">
                    <div class="image">
                        <img src="pictures\anonimis.jpg" alt="">
                    </div>
                    <div class="name-profession">
                        <span class="profession">Todo conhecimento pode ser um bom conhecimento.</span>
                    </div>
                    <div class="button">
                        <button><a href="seleciona_usuario.php">Escrita por usuarios</a></button>
                    </div>
                </div>
            </div>
        </div>
        <br><br>
        <div class="container3">
            <div class="crie">
                <img src="pictures\autorai.jpg">
                <p>Voce já imaginou os seus pensamentos e ideias registrado nesse site site? <br>
                    Em nosso site vc pode se expressar de forma segura <br>
                    Deseja escrever algo?</p>
                <button><a href="Crie_suas_frases.html">Crie suas próprias frases</a></button>
            </div>
        </div>

        <br> <br> <br> <br>
        <br><br><br><br>
        <footer class="footer">
            <div class="left">
                <h4 class="title-footer">Atraves das <span>letras</span></h4>
                <p class="links">

                    <a href="sisindex.php" title="Acessar perfil">Acessar perfil</a>
                    <a href="Cadastro.html" title="Criar conta">Criar conta</a>
                    <a href="Sobre nós .html" title="Sobre nós">Sobre nós</a>
                </p>
              <a href="#fotim" title="menu">  <img class="img_f" src="pictures\Frases-removebg-preview.png"></a>
                <p class="Copyright">Copyright &copy; 2023 Através das letras - Todos os Direitos Reservados.</p>
            </div><!--Left-->
            <div class="right">
                <h4 class="title-footer">Entre em contato conosco</h4>
                <form action="mensagem.php" method="post">
                    <input type="text" name="nome" placeholder="Nome"  />
                    <input type="email" name="email" placeholder="E-mail"  />
                    <input type="text" name="assunto" placeholder="assunto" />
                    <textarea name="mensagem" placeholder="Mensagem" ></textarea>
                    <button class="btn">Enviar</button>
                </form>
            </div><!--Right-->
        </footer>
        <script src="JS\script carrosel.js"></script>
        <script src="JS\scroll.js"></script>
</body>

</html>