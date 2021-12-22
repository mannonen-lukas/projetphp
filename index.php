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
    <link rel="stylesheet" type="text/css" media="screen" href="asset/css/script.css">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet"
    integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
</head>

<body>

    <header>
        <nav class="myNav">
            <div class="row">
                <!--Menu mobile-->
                <div class="col dropdown d-block d-md-block d-lg-block d-xl-none d-xxl-none">
                    <i class="fas fa-bars iBars m-2" type="button" id="dropdownMenuButton1" data-bs-toggle="dropdown" aria-expanded="false"></i>
                    <ul class="dropdown-menu" aria-labelledby="dropdownMenuButton1">
                        <li><a class="dropdown-item" type="button" href="#">Accueil</a></li>
                        <li><a class="dropdown-item" type="button" href="#">Qui sommes-nous?</a></li>
                        <li><a class="dropdown-item" type="button" href="#">Nos clients témoignent</a></li>
                        <li><a class="dropdown-item" type="button" href="#">Contact</a></li>
                    </ul>
                </div>
                <!--Menu WEB-->
                <div class="col-2 text-align-center d-none d-md-none d-lg-none d-xl-block d-xxl-block">
                </div>
                <div class="col-2 text-align-center d-none d-md-none d-lg-none d-xl-block d-xxl-block">
                    <button id="welcome" class="navButton">Accueil</button>
                </div>
                <div class=" col-2 text-align-center d-none d-md-none d-lg-none d-xl-block d-xxl-block">
                    <button id="us" class="navButton">Qui sommes-nous?</button>
                </div>
                <div class="col-2 text-align-center d-none d-md-none d-lg-none d-xl-block d-xxl-block">
                    <button id="customers" class="navButton">Nos clients témoignent</button>
                </div>
                <div class="col-2 text-align-center d-none d-md-none d-lg-none d-xl-block d-xxl-block">
                    <button id="contact" class="navButton">Contact</button>
                </div>
            </div>
        </nav>
    </header>

<?php
    echo renderMenu($menu);
    echo renderPage($content);
?>
</body>

</html>