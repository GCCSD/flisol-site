<?php
/**
 * index.php
 *
 * Script responsável por carregar as páginas.
 *
 * Aqui está também a configuração do site.
 *
 * @author GCCSD <http://gccsd.com.br>
 */

define('URL', 'http://flisol/');

// Definindo a página a ser exibida
if (isset($_GET['pagina'])) {
    switch ($_GET['pagina']) {
        case 'principal':
            $pagina = 'principal.php';
            $titulo = 'Flisol Santos 2012';
            break;
        case 'flisol':
            $pagina = 'flisol.php';
            $titulo = 'Sobre o Flisol';
            break;
        case 'programacao':
            $pagina = 'programacao.php';
            $titulo = 'Programação | Flisol Santos 2012';
            break;
        case 'data_hora':
            $pagina = 'data_hora.php';
            $titulo = 'Onde e Quando | Flisol Santos 2012';
            break;
        case 'inscreva-se':
            $pagina = 'inscreva-se.php';
            $titulo = 'Inscreva-se! | Flisol Santos 2012';
            break;
        case 'organizadores':
            $pagina = 'organizadores.php';
            $titulo = 'Organizadores | Flisol Santos 2012';
            break;
        case 'fotos':
            $pagina = 'fotos.php';
            $titulo = 'Fotos | Flisol Santos 2012';
            break;
        default:
            $pagina = '404.php';
            $titulo = 'Ops! Página não encontrada!';
            break;
    }
}
else {
    $pagina = 'principal.php';
    $titulo = 'Flisol Santos 2012';
}

include('template.php');

/* Fim do arquivo index.php */
