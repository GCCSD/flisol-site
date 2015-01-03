<?php
/**
 * index.php
 *
 * @author GCCSD <http://gccsd.com.br>
 */

require __DIR__ . '/bootstrap.php';

$page = $route;

switch ($route) {
    case 'principal':
        $title = 'Flisol Santos 2015';
        break;
    case 'flisol':
        $title = 'Sobre o Flisol';
        break;
    case 'programacao':
        $title = 'Programação | Flisol Santos 2015';
        break;
    case 'local':
        $title = 'Local | Flisol Santos 2015';
        break;
    case 'organizadores':
        $title = 'Organizadores | Flisol Santos 2015';
        break;
    case 'fotos':
        $titulo = 'Fotos | Flisol Santos 2015';
        break;
    default:
        $page = '404';
        $title = 'Ops! Página não encontrada!';
        break;
}

include('template.php');
