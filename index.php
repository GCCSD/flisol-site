<?php
/**
 * index.php
 *
 * @author GCCSD <http://gccsd.com.br>
 */

require __DIR__ . '/bootstrap.php';

$page = $route;
$eventTitle = 'Flisol Santos '.date("Y");

switch ($route) {
    case '':
        $page = 'principal';
        $title = $eventTitle;
        break;
    case 'principal':
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

include('template.php');
