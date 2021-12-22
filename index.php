<?php 
require('assets/lib/source.php');
?>
<!DOCTYPE html>
<html lang="fr" dir="ltr">

<head>
    <meta charset="utf-8">
    <title>Projet PHP Page test</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.8.1/css/all.css" integrity="sha384-50oBUHEmvpQ+1lW4y57PTFmhCaXp0ML5d60M1M7uH2+nqUivzIebhndOJK28anvf" crossorigin="anonymous">
    <link rel="stylesheet" type="text/css" media="screen" href="assets/css/script.css">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet"
    integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
</head>
<body>
    <header>
        <nav class="myNav">
            <div class="row">
                <div class="col m-1">
                    <img src="assets/img/logo.png" alt="Logo" width="80px">
                </div>
                <!--Menu mobile-->
                <div class="col-2 dropdown d-block d-md-block d-lg-block d-xl-none d-xxl-none">
                    <i class="fas fa-bars iBars m-2" type="button" id="dropdownMenuButton1" data-bs-toggle="dropdown" aria-expanded="false"></i>
                    <ul class="dropdown-menu" aria-labelledby="dropdownMenuButton1">
                        <li><?= menuMobil($menu) ?></li>
                    </ul>
                </div>
                <!--Menu WEB-->
                <div class="col-9 mt-3 text-align-center d-none d-md-none d-lg-none d-xl-block d-xxl-block">
                    <?= menuWeb($menu) ?>
                </div>
            </div>
        </nav>
    </header>
    <div class="myBody">
        <!-- ici le contenue de la page-->
        <?= renderPage($content);?>
    </div>
    <footer>
        <div class="container">
            <div class="row">
                <div class="col">Maçonnerie Ocordo</div>
                <div class="col">02.51.84.18.24</div>
                <div class="col">contact@ocordo-travaux.fr</div>
            </div>
        </div>
    </footer>
<!-- JavaScript pour la nav bar mobile -->
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous"></script>
</body>
</html>