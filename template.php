<!DOCTYPE html>
<html lang="pr-br">
    <head>
        <meta charset="utf-8" />
        <link rel="stylesheet" href="<?php echo URL; ?>css/template.css" type="text/css" media="screen" />
        <title><?php echo $titulo; ?></title>
    </head>

    <body>
        <div id="tudo">
            <div id="layout">

                <ul id="menu">
                    <li><a href="<?php echo URL; ?>">Home</a></li>
                    <li><a href="<?php echo URL; ?>flisol">Flisol</a></li>
                    <li><a href="<?php echo URL; ?>local">Local</a></li>
                    <li><a href="<?php echo URL; ?>programacao">Programação</a></li>
                    <li><a href="<?php echo URL; ?>organizadores">Organização</a></li>
                    <li><a href="<?php echo URL; ?>fotos">Fotos</a></li>
                </ul>

                <img src="<?php echo URL; ?>imagens/topo_flisol2.png" alt="Flisol em Santos, abril de 2013" />

                <div class="limpar"></div>

                <div id="lateral">
                    <h1>Realização</h1>
                    <ul>
                        <li>
                            <a href="http://gccsd.com.br/" title="Grupo de Compartilhamento do Conhecimento Santos Dumont">
                                <img src="<?php echo URL; ?>imagens/gccsd.png" alt="GCCSD" />
                            </a>
                        </li>
                    </ul>

                    <h1>Patrocínio</h1>
                    <p>Seja um patrocinador!</p>
<!--
                    <ul>
                        <li>
                            <a href="http://jacaretecnologia.com.br/" title="Jacaré Tecnologia">
                                <img src="<?php echo URL; ?>imagens/jacare.png" alt="Jacaré Tecnologia" />
                            </a>
                        </li>
                        <li>
                            <a href="http://www.techme.com.br/" title="Tech Me!">
                                <img src="<?php echo URL; ?>imagens/techme.png" alt="Tech Me!" />
                            </a>
                        </li>
                    </ul>
-->
                </div>

                <div id="conteudo">
                    <?php include('paginas/'.$pagina); ?>
                </div>

                <div class="limpar"></div>

                <div id="rodape">
                    <div id="meio">
                        <p>Organização <a href="http://gccsd.com.br/" title="Grupo de Compartilhamento do Conhecimento Santos Dumont">GCCSD</a></p>
                        <p>Festival Latino Americano de Instalação de Software Livre - Santos/SP</p>
                        <p>2011 - <?php echo date('Y'); ?> :: Site desenvolvido por: <a href="http://twitter.com/as2oliveira" title="Twitter do Alex">Alex</a>, <a href="https://plus.google.com/103652171239012399765" title="Diego Souza no Google+">Apu</a>, <a href="http://twitter.com/cassialuz/" title="Cássia Luz no Twitter">Cássia Luz</a> e <a href="http://twitter.com/infog9/" title="InFog no Twitter">InFog</a></p>
                    </div>
                    <div class="limpar"></div>
                </div>
                <div class="limpar"></div>
            </div>
        </div>
    </body>
</html>
