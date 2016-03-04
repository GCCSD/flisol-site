<?php
/**
 * index.php
 *
 * @author GCCSD <http://gccsd.com.br>
 */

require __DIR__ . '/bootstrap.php';

$page = $route;
$eventTitle = 'Flisol Santos 2016';

switch ($route) {
    case '':
    case 'principal':
        $page = 'principal';
        $title = $eventTitle;
    break;
    case 'flisol':
        $title = 'Sobre o Flisol';
        break;
    case 'programacao':
        $title = 'Programação | '.$eventTitle;
        break;
    case 'local':
        $title = 'Local | '.$eventTitle;
        break;
    case 'organizadores':
        $title = 'Organizadores | '.$eventTitle;
        break;
    case 'fotos':
        $title = 'Fotos | '.$eventTitle;
        break;
    default:
        $page = '404';
        $title = 'Ops! Página não encontrada!';
        break;
}

require_once 'template.php';
