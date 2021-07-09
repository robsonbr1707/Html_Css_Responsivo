<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Inicio</title>
    <link rel="stylesheet" href="styles.css">

    <script>

        function abrirMenu(){
            let abrir_menu =  document.querySelector('.navegacao_hidden').style.display="block";
        }

        function fecharMenu(){
            let fechar_menu =  document.querySelector('.navegacao_hidden').style.display="none";
        }

        function eventOf(){
            fecharMenu();
        }

    </script>
 
</head>
<body onresize="eventOf();">

    <header>
        <nav>
            <a href="index.php"><img src="imagens/logo.jpg"></a><a href="#" class="block"><img src="imagens/call.png"> 4002-8922</a> 
                <div class="hidden" onclick ="abrirMenu();" ><img src="imagens/menu.svg"></div> 

                <ul class="navegacao_hidden">
                    <li class="contato"><img src="imagens/call.png"> 4002-8922</li>
                    <li><a href="#">Página 1</a></li>
                    <li><a href="#">Página 2</a></li>
                    <li><a href="#">Página 3</a></li>
                    <li><a href="#">Página 4</a></li>
                    <li><a href="#">Página 5</a></li>
                    <li><a href="#">Página 6</a></li>
                    <li><a href="#">Página 7</a></li>
                    <li class="fechar" onclick ="fecharMenu();">Fechar</li>
                </ul>
                     
            <ul class="navegacao">
                <li><a href="#">Página 1</a></li>
                <li><a href="#">Página 2</a></li>
                <li><a href="#">Página 3</a></li>
                <li><a href="#">Página 4</a></li>
                <li><a href="#">Página 5</a></li>
                <li><a href="#">Página 6</a></li>
                <li><a href="#">Página 7</a></li>
            </ul>
                    <hr>
        </nav>
    </header>

            <!---Primeira Sessao--->

    <section class="sessao">

        <div class="caixa-sessao">
            <a href="registro.php?id=1"><img src="imagens/html.png" ></a> 
            <h5>Oque é Html</h5>
        </div>

        <div class="caixa-sessao">
            <a href="registro.php?id=2"><img src="imagens/css.png" ></a>
            <h5>Oque é Css</h5>
        </div>

        <div class="caixa-sessao">
            <a href="registro.php?id=3"><img src="imagens/php.jpg"></a>  
            <h5>Oque é Php</h5>
        </div>

        <div class="caixa-sessao">
            <a href="registro.php?id=4"><img src="imagens/laravel.png"></a> 
            <h5>Oque é Laravel</h5>
        </div>

        <div class="caixa-sessao">
            <a href="registro.php?id=5"><img src="imagens/bootstrap.png"></a> 
            <h5>Oque é Bootstrap</h5>
        </div>

    </section>

            <!---Segunda Sessao--->

    <section class="sessao">

        <div class="caixa-sessao">
            <a href="registro.php?id=6"><img src="imagens/dev_1.jpeg"></a> 
            <h5>Curso De Html 5 Grátis</h5>
        </div>

        <div class="caixa-sessao">
            <a href="registro.php?id=7"><img src="imagens/dev_2.jpg"></a> 
            <h5>Curso De Css 3 Grátis</h5>
        </div>

        <div class="caixa-sessao">
            <a href="registro.php?id=8"><img src="imagens/dev_3.jpg"></a> 
            <h5>Curso De Php e Mysql Grátis</h5>
        </div>

        <div class="caixa-sessao">
            <a href="registro.php?id=9"><img src="imagens/dev_4.jpg"></a>  
            <h5>Curso De Javascript Grátis</h5>
        </div>

        <div class="caixa-sessao">
            <a href="registro.php?id=10"><img src="imagens/dev_5.jpeg"></a>  
            <h5>Curso Completo De Desenvolvimento Web</h5>
        </div>
        
    </section>

            <!---Terceira Sessao--->

    <section class="sessao">

        <div class="caixa-sessao">
            <a href="registro.php?id=11"><img src="imagens/vikings.jpeg"></a>  
            <h5>Série Vikings 1° Temporada</h5>
        </div>

        <div class="caixa-sessao">
            <a href="registro.php?id=12"><img src="imagens/gambito_da_rainha.jpg"></a>  
            <h5>Série O Gambito Da Rainha</h5>
        </div>

        <div class="caixa-sessao">
            <a href="registro.php?id=13"><img src="imagens/supernatural_melhor_serie.jpg"></a>  
            <h5>Série Supernatural 15° Temporada</h5>
        </div>

        <div class="caixa-sessao">
            <a href="registro.php?id=14"><img src="imagens/stranger_things.png"></a>  
            <h5>Série Stranger Things 1° Temporada</h5>
        </div>

        <div class="caixa-sessao">
            <a href="registro.php?id=15"><img src="imagens/the_witcher.jpg"></a>  
            <h5>Série The Wicher 1° Temporada</h5>
        </div>
        
    </section>

            <!---Quarta Sessao--->

    <section class="sessao">

        <div class="caixa-sessao">
            <a href="registro.php?id=16"><img src="imagens/os_vingadores.jpg"></a>  
            <h5>Filme Os Vingadores Guerra Infinita</h5>
        </div>

        <div class="caixa-sessao">
            <a href="registro.php?id=17"><img src="imagens/senhor_dos_aneis.jpg"></a>  
            <h5> Senhor Dos Aneis A Sociedade Do Anel</h5>
        </div>

        <div class="caixa-sessao">
            <a href="registro.php?id=18"><img src="imagens/hobbit.jpg"></a>  
            <h5>Filme O Hobbit Uma Jornada Inesperada</h5>
        </div>

        <div class="caixa-sessao">
            <a href="registro.php?id=19"><img src="imagens/velozes_e_furiosos.jpg"></a>  
            <h5>Filme Velozes E Furiosos 8</h5>
        </div>

        <div class="caixa-sessao">
            <a href="registro.php?id=20"><img src="imagens/venom.jpg"></a>  
            <h5>Filme Venom</h5>
        </div>
        
    </section>
    <hr style="width: 67%;margin:20px auto;">

    <footer>

        <img src="imagens/omega.jpg" class="imagem">

        <div class="sobre-nos">
            <h3>Pessoa Ou Empresa</h3>
            <p>
                Lorem ipsum dolor sit amet consectetur adipisicing elit. Eius quia, soluta dolor impedit nobis quas dolore? Doloribus odit rerum quae laborum velit.
            </p>

            <p>
                Lorem ipsum dolor sit amet consectetur adipisicing elit. Itaque, facere doloremque, quos pariatur molestias fugit eligendi 
            </p>
        </div>

        <div class="caixa-acesso">
            <h3> Acesse Também: </h3>
            <div class="redes-sociais">
                <a href="#"> <i> <img src="imagens/facebook.png"> </i> www.fb.com/loremipsum</a>
            </div>

            <div class="redes-sociais">
                <a href="#"> <i> <img src="imagens/instagram.png"> </i> www.ins.com/loremipsum</a>
            </div>

            <div class="redes-sociais">
                <a href="#"> <i> <img src="imagens/twitter.png"> </i> www.twi.com/loremipsum</a>
            </div>
        </div>
    </footer>

    <div id="direitos-reservados">
        <p>Todos Os Direitos Reservados - &copy; 2012</p>
        <p>Linha Past | <i> <img src="imagens/logo.jpg"> </i> comunicao.com.br</p>
    </div>

</body>
</html>