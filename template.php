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
                    <li><a href="<?php echo URL; ?>">Flisol</a></li>
                    <li><a href="<?php echo URL; ?>data_hora">Data e Hora</a></li>
                    <li><a href="<?php echo URL; ?>programacao">Programação</a></li>
                    <li><a href="<?php echo URL; ?>prepare-se">Prepare-se!</a></li>
                    <li><a href="<?php echo URL; ?>organizadores">Organização</a></li>
                    <li><a href="<?php echo URL; ?>fotos">Fotos</a></li>
                </ul>

                <img src="<?php echo URL; ?>imagens/topo_flisol.png" alt="Flisol em Santos, abril de 2011" />

                <div class="limpar"></div>

                <div id="lateral">
                    <iframe src="https://spreadsheets.google.com/embeddedform?formkey=dDJmTzhteW1WSnVSa1FxVjFzMG5UcUE6MQ" width="300" height="500" frameborder="0" marginheight="0" marginwidth="0">Loading...</iframe>
                    <h1>Patrocínio</h1>
                    <ul>
                        <li>
                            <a href="http://jacaretecnologia.com.br/" title="Jacaré Tecnologia">
                                <img src="<?php echo URL; ?>imagens/jacare.png" alt="Jacaré Tecnologia" />
                            </a>
                        </li>
                        <li>
                            <a href="http://casoft.info/" title="CaSoft">
                                <img src="<?php echo URL; ?>imagens/casoft.png" alt="CaSoft" />
                            </a>
                        </li>
                    </ul>
                    <h1>Apoio</h1>
                    <ul>
                        <li>
                            <a href="microcamp" title="Microcamp Guarujá">
                                <img src="<?php echo URL; ?>imagens/microcamp.jpg" alt="Microcamp Guarujá" />
                            </a>
                        </li>
                        <li>
                            <a href="http://www.lojainfoweb.com/" title="Infoweb">
                                <img src="<?php echo URL; ?>imagens/infoweb.png" alt="Infoweb" />
                            </a>
                        </li>
                        <li>
                            <a href="Logical" title="Logical">
                                <img src="<?php echo URL; ?>imagens/logical.jpg" alt="Logical" />
                            </a>
                        </li>
                    </ul>
                </div>

                <div id="conteudo">
                    <?php include('paginas/'.$pagina); ?>
                </div>

                <div id="rodape">
                    <div id="gnulinux">
                        <img src="<?php echo URL; ?>imagens/gnulinux.png" alt="Gnu/Linux" />
                    </div>
                    <div id="gccsd">
                        <a href="http://gccsd.com.br/" title="Grupo de Compartilhamento do Conhecimento Santos Dumont">
                            <img src="<?php echo URL; ?>imagens/gccsd.png" alt="GCCSD" />
                        </a>
                    </div>
                    <div id="meio">
                        <p>Festival Latino Americano de Instalação de Software Livre - Santos/SP</p>
                        <p>Organização <a href="http://gccsd.com.br/" title="Grupo de Compartilhamento do Conhecimento Santos Dumont">GCCSD</a></p>
                        <p>Site desenvolvido por: <a href="http://twitter.com/as2oliveira" title="Twitter do Alex">Alex</a>, <a href="http://twitter.com/DiegoSouza9" title="Twitter do Apu">Apu</a>, <a href="http://cassialuz.casoft.info/" title="Blog da Cássia Luz">Cássia Luz</a> e <a href="http://infog.casoft.info/" title="Blog do InFog">InFog</a></p>
                    </div>
                </div>
                <div class="limpar"></div>
            </div>
        </div>
    </body>
</html>
