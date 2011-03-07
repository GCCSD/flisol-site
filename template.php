<!DOCTYPE html>
<html lang="pr-br">
    <head>
        <meta http-equiv="content-type" content="text/html;charset=UTF-8" />
        <link rel="stylesheet" href="<?php echo URL; ?>css/template.css" type="text/css" media="screen" />
        <title><?php echo $titulo; ?></title>
    </head>

    <body>
        <div id="tudo">
            <div id="layout">

                <img src="<?php echo URL; ?>imagens/topo.png" alt="Flisol em Santos, abril de 2011" />

                <ul id="menu">
                    <li><a href="<?php echo URL; ?>">sobre o flisol</a></li>
                    <li><a href="<?php echo URL; ?>programacao">programação</a></li>
                    <li><a href="<?php echo URL; ?>prepare-se">prepare-se!</a></li>
                    <li><a href="<?php echo URL; ?>organizadores">organizadores</a></li>
                    <li><a href="<?php echo URL; ?>local">local</a></li>
                    <li><a href="<?php echo URL; ?>contato">contato</a></li>
                </ul>

                <div id="lateral">
                    <iframe src="https://spreadsheets.google.com/embeddedform?formkey=dDJmTzhteW1WSnVSa1FxVjFzMG5UcUE6MQ" width="300" height="500" frameborder="0" marginheight="0" marginwidth="0">Carregando...</iframe>
                </div>

                <div id="conteudo">
                    <?php include('paginas/'.$pagina); ?>
                </div>

                <div id="rodape">
                    <ul id="menurodape">
                        <li><a href="#">sobre o flisol</a></li>
                        <li><a href="#">localização</a></li>
                        <li><a href="#">prepare-se</a></li>
                        <li><a href="#">programação</a></li>
                        <li><a href="#">organizadores</a></li>
                    </ul>

                    <p>Festival Latino Americano de Instalação de Software Livre</p>

                </div>
            </div>
        </div>
    </body>
</html>
