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
            $titulo = 'Flisol Santos 2011';
            break;
        case 'programacao':
            $pagina = 'programacao.php';
            $titulo = 'Programação do evento';
            break;
        default:
            $pagina = '404.php';
            $titulo = 'Ops! Página não encontrada!';
            break;
    }
}
else {
    $pagina = 'principal.php';
    $titulo = 'Flisol Santos 2011';
}

include('template.php');

/* Fim do arquivo index.php */