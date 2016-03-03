<?php
/**
 *giphy.php - a 'gif library' for 404-friendly messages
 *
 * @author Gustavo Pereira
 *
 * Feel free to improve it whenever you want.
 */
$gifLibrary = array("http://i.giphy.com/XNHQKwvEYGEWA.gif",
    "http://i.giphy.com/5TmqREiDQ8HrG.gif",
    "http://i.giphy.com/GHCWgi7LebGRq.gif");

$imgSource = $gifLibrary[rand(0,(count($gifLibrary)-1))];


