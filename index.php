<?php 
require('assets/lib/source.php');
?>
<!DOCTYPE html>
<html lang="fr" dir="ltr">
<head>
    <meta charset="utf-8">
    <title><?= $title ?></title>
    <link rel="stylesheet" type="text/css" media="screen" href="assets/css/script.css">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet"
    integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
</head>
<body>
    <nav><?= renderMenu($menu)?></nav>
    <div class="myBody">
    <?= renderPage($content)?>
    </div>
<footer>
    <div class="container text-center">
      <div class="row justify-content-center">
        <div class="col-lg-3 col-sm-10">
            <p>Maconnerie Orcodo</p>
        </div>
        <div class="col-lg-3 col-sm-10">
          <p>02.51.84.18.24</p>
        </div>
        <div class="col-lg-3 col-sm-10">
          <p>contact@ocordo-travaux.fr</p>
        </div>
      </div>
    </div>
    </div>
  </footer>
</body>
</html>