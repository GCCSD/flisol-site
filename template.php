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

                <img src="<?php echo URL; ?>imagens/logo.png" alt="Flisol em Santos, abril de 2011" />

                <iframe src="https://spreadsheets.google.com/embeddedform?formkey=dDJmTzhteW1WSnVSa1FxVjFzMG5UcUE6MQ" width="760" height="728" frameborder="0" marginheight="0" marginwidth="0">Loading...</iframe>

                <ul id="menu">
                    <li><a href="index.php">sobre o flisol</a></li>
                    <li><a href="index.php">organizadores</a></li>
                    <li><a href="index.php">programação</a></li>
                    <li><a href="index.php">prepare-se!</a></li>
                    <li><a href="index.php">contato</a></li>
                </ul>


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