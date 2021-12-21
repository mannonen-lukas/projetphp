<?php 
require('assets/lib/source.php');
?>
<!DOCTYPE html>
<html lang="fr" dir="ltr">
<head>
    <meta charset="utf-8">
    <title><?= $title ?></title>
    <link rel="stylesheet" type="text/css" media="screen" href="asset/css/script.css">
    <meta name="viewport" content="width=device-width, initial-scale=1">
</head>
<body>
<?php
    echo renderMenu($menu);
    echo renderPage($content);
?>
</body>
</html>