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

                <ul id="menu">
                    <li><a href="<?php echo URL; ?>">Home</a></li>
                    <li><a href="<?php echo URL; ?>flisol">Flisol</a></li>
                    <li><a href="<?php echo URL; ?>data_hora">Quando e onde</a></li>
                    <li><a href="<?php echo URL; ?>programacao">Programação</a></li>
                    <li><a href="<?php echo URL; ?>prepare-se">Prepare-se!</a></li>
                    <li><a href="<?php echo URL; ?>organizadores">Organização</a></li>
                    <li><a href="<?php echo URL; ?>fotos">Fotos</a></li>
                </ul>

                <img src="<?php echo URL; ?>imagens/topo_flisol.png" alt="Flisol em Santos, abril de 2011" />

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
                    <ul>
                        <li>
                            <a href="http://casoft.info/" title="CaSoft">
                                <img src="<?php echo URL; ?>imagens/casoft.png" alt="CaSoft" />
                            </a>
                        </li>
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

                    <h1>Apoio</h1>
                    <ul>
                        <li>
                            <a href="http://www.fatecrl.edu.br/" title="Centro Paula Souza">
                                <img src="<?php echo URL; ?>imagens/cps.png" alt="Centro Paula Souza" />
                            </a>
                        </li>
                    </ul>
                    <ul>
                        <li>
                            <a href="http://www.fatecrl.edu.br/" title="Fatec Rubens Lara">
                                <img src="<?php echo URL; ?>imagens/fatec.png" alt="Fatec Rubens Lara" />
                            </a>
                        </li>
                    </ul>
                </div>

                <div id="conteudo">
                    <?php include('paginas/'.$pagina); ?>
                </div>

                <div class="limpar"></div>

                <div id="rodape">
                    <div id="meio">
                        <p>Organização <a href="http://gccsd.com.br/" title="Grupo de Compartilhamento do Conhecimento Santos Dumont">GCCSD</a></p>
                        <p>Festival Latino Americano de Instalação de Software Livre - Santos/SP</p>
                        <p>Site desenvolvido por: <a href="http://twitter.com/as2oliveira" title="Twitter do Alex">Alex</a>, <a href="http://twitter.com/DiegoSouza9" title="Twitter do Apu">Apu</a>, <a href="http://cassialuz.casoft.info/" title="Blog da Cássia Luz">Cássia Luz</a> e <a href="http://infog.casoft.info/" title="Blog do InFog">InFog</a></p>
                    </div>
                    <div class="limpar"></div>
                </div>
                <div class="limpar"></div>
            </div>
        </div>
    </body>
</html>
