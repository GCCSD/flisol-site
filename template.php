<!DOCTYPE html>
<html lang="pr-br">
    <head>
        <meta charset="utf-8" />
        <link href="//fonts.googleapis.com/css?family=Lato:400,300,700,900" rel="stylesheet" type="text/css">
        <link href="//maxcdn.bootstrapcdn.com/font-awesome/4.2.0/css/font-awesome.min.css" rel="stylesheet">
        <link rel="stylesheet" href="<?php echo URL; ?>assets/css/template.css" type="text/css" media="screen" />
        <title><?php echo $title; ?></title>
    </head>

    <body>
        <div id="layout">
            <div id="top">
                <div id="top_wrapper" class="main-size">
                    <h1>Flisol Santos 2015</h1>
                    <h2>25 de Abril</h2>
                    <ul id="menu">
                        <li class="<?php echo ($page == 'principal') ? 'active' : ''; ?>">
                            <a href="<?php echo URL; ?>"><i class="fa fa-home"></i></a>
                        </li>
                        <li class="<?php echo ($page == 'flisol') ? 'active' : ''; ?>">
                            <a href="<?php echo URL; ?>flisol">Flisol</a>
                        </li>
                        <li class="<?php echo ($page == 'programacao') ? 'active' : ''; ?>">
                            <a href="<?php echo URL; ?>programacao">Programação</a>
                        </li>
                        <li class="<?php echo ($page == 'local') ? 'active' : ''; ?>">
                            <a href="<?php echo URL; ?>local">Local</a>
                        </li>
                        <li class="<?php echo ($page == 'organizadores') ? 'active' : ''; ?>">
                            <a href="<?php echo URL; ?>organizadores">Organização</a>
                        </li>
                        <li class="<?php echo ($page == 'fotos') ? 'active' : ''; ?>">
                            <a href="<?php echo URL; ?>fotos">Fotos</a>
                        </li>
                    </ul>
                    <?php if ($page == 'principal') : ?>
                        <iframe class="video" src="//www.youtube.com/embed/OG5EAGT5VDk" frameborder="0" allowfullscreen></iframe>
                    <?php endif; ?>
                </div>
            </div>

            <div id="content" class="main-size">
                <?php include("pages/{$page}.php"); ?>
            </div>

            <div id="rodape">
                <p>
                    <img src="<?php echo URL; ?>assets/images/flisol.png" alt="Flisol" />
                </p>
                <p>Festival Latino Americano de Instalação de Software Livre</p>
                <p>
                    Flisol Santos :: 2011 - <?php echo date('Y'); ?> ::
                    <a href="http://gccsd.com.br" title="GCCSD">GCCSD</a>
                </p>
            </div>
        </div>
    </body>
</html>
