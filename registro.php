<?php  
    include_once ("conexao.php"); 
?>
<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Registro</title>
    <link rel="stylesheet" href="registro.css">
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
        <a href="index.php"><img src="imagens/logo.jpg"><a href="#" class="block"><img src="imagens/call.png"> 4002-8922</a></a>  
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

    <section class="sessao">

        <div class="caixa-sessao">
    <?php foreach ($select as $value) { ?>

           <h2><?php  echo $value['titulo']; ?></h2>
           <img src="<?php echo $value['imagem'] ?>">
           <p><?php  echo $value['descricao']; ?></p>

<?php } ?>

        </div>

    </section>

    <hr style="margin: auto;width:67%;">

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