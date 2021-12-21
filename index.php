<?php
function navBtn($numberPage){
    $fichier = 'source.xml';
    $xml = simplexml_load_file($fichier);
    echo '<a href="">' . $xml->page[$numberPage]->menu . '</a>';
};
function pageXml($numberPage){
    $fichier = 'source.xml';
    $xml = simplexml_load_file($fichier);
    echo '<h1>' . $xml->page[$numberPage]->title . '</h1>';
    echo $xml->page[$numberPage]->content;
}
?>
<!DOCTYPE html>
<html lang="fr" dir="ltr">
<head>
    <meta charset="utf-8">
    <title>Projet PHP Page test</title>
    <link rel="stylesheet" type="text/css" media="screen" href="asset/css/script.css">
    <meta name="viewport" content="width=device-width, initial-scale=1">
</head>
<body>
<nav><?php 
    navBtn(0);
    navBtn(1);
    navBtn(2);
    navBtn(3);
    ?></nav>
    <?php pageXml(3)?>
</body>
</html>