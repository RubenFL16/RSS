<?php
    //Incluimos el fichero RSS
include('rss/rss_fetch.inc');
define('MAGPIE_OUTPUT_ENCODING','UTF-8');
    //Defino de dónde saco la información
$web='http://blog.rubenfl.tk/feed/';
    //Llamo a la función para que me devuelva el objeto RSS
$rss=fetch_rss($web);
    //Saco la información del "CHANNEL"
$entrantes=$rss->channel['title'];

$i=0;
$titular=array();
$direccion=array();

    //Capturo la información del RSS en arrays
foreach ($rss->items as $item ) {
    $titular[$i]=$item["title"];
    $direccion[$i]=$item["link"];
    $contenido1=$item["description"];

    $contenido2=explode(".", $contenido1);
    $contenido[$i]=$contenido2[0];

    $i++;
}
?>
