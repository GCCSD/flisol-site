<!DOCTYPE html>
<html lang="pr-br">
    <head>
        <meta charset="utf-8" />
        <link rel="stylesheet" href="<?php echo URL; ?>assets/css/template.css" type="text/css" media="screen" />
        <title><?php echo $title; ?></title>
    </head>

    <body>
        <div id="layout">

            <div id="topo">
                <ul id="menu">
                    <li><a href="<?php echo URL; ?>">Home</a></li>
                    <li><a href="<?php echo URL; ?>flisol">Flisol</a></li>
                    <li><a href="<?php echo URL; ?>local">Local</a></li>
                    <li><a href="<?php echo URL; ?>programacao">Programação</a></li>
                    <li><a href="<?php echo URL; ?>organizadores">Organização</a></li>
                    <li><a href="<?php echo URL; ?>fotos">Fotos</a></li>
                </ul>
            </div>

            <div id="conteudo">
                <?php include("pages/{$page}.php"); ?>
            </div>

            <div class="limpar"></div>

            <div id="rodape">
                <div id="meio">
                    <h2>Realização</h2>
                    <p>
                            <a href="http://gccsd.com.br/" title="Grupo de Compartilhamento do Conhecimento Santos Dumont">
                                <img src="<?php echo URL; ?>assets/images/gccsd.png" alt="GCCSD" />
                            </a>
                    </p>
                    <p>Festival Latino Americano de Instalação de Software Livre - Santos/SP</p>
                    <p>2011 - <?php echo date('Y'); ?> :: Site desenvolvido por: <a href="http://twitter.com/as2oliveira" title="Twitter do Alex">Alex</a>, <a href="https://plus.google.com/103652171239012399765" title="Diego Souza no Google+">Apu</a>, <a href="http://twitter.com/cassialuz/" title="Cássia Luz no Twitter">Cássia Luz</a> e <a href="http://twitter.com/infog9/" title="InFog no Twitter">InFog</a></p>
                </div>
                <div class="limpar"></div>
            </div>
            <div class="limpar"></div>
        </div>
    </body>
</html>
