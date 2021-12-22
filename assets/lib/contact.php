<?php
function validate($field) {
    $regexFields = [
        'firstname'  => '/^[a-zA-Z]\'?[- a-zA-Z]+$/',
        'lastname' => '/^[a-zA-Z]\'?[- a-zA-Z]+$/',
        'age' => '/^[a-zA-Z]\'?[- a-zA-Z]+$/',
        'company'=> '/^[a-zA-Z]\'?[- a-zA-Z]+$/',
    ];
    if ((isset($_POST[$field])) && (isset($regexFields[$field]) && !preg_match($regexFields[$field], $_POST[$field]))) {
        ?>
        <p class="alert alert-danger">Ce champ contient des incohérences.</p>
    <?php
    ;    
    } else {
    return true;
    }
}
?>
<!DOCTYPE html>
<html lang="fr" dir="ltr">
<head>
    <meta charset="utf-8">
    <title>PHP Partie 10 TP 1</title>
    <link rel="stylesheet" type="text/css" media="screen" href="maintp1.css">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
</head>
<body>
    <h1 class="text-center">Contactez nous</h1>
    <div class="container-fluid text-center">
        <form action="index.php" method="post">
        <div class="row col-3 m-3">
        <p><iframe style="border: 0; float: right;" src="https://www.google.com/maps/embed?pb=!1m14!1m8!1m3!1d10840.441212216989!2d-1.562078!3d47.214424!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x0%3A0x10a23dc1d980bca7!2sOcordo+Travaux+Nantes!5e0!3m2!1sfr!2sfr!4v1434122059096" width="600" height="450" frameborder="0"></iframe></p>
            </div>
            <p>POUR OBTENIR UN DEVIS GRATUIT 3 POSSIBILITÉS :</p>
<ul>
    <li>Téléphonez-nous au 02.51.84.18.24</li>
    <li>Ou écrivez-nous à cette adresse email : contact@ocordo-travaux.fr</li>
    <li>Ou compétez le formulaire ci-dessous :</li>
</ul>
            <div role="form">
    <form action="#" method="post" class="form" novalidate="novalidate">
    <label>Votre nom * :</label><input name="your-name" value="" size="40" class="form-control text validates-as-required" type="text">
        <label>Votre email :</label><input name="your-email" value="" size="40" class="form-control text email validates-as-email"  type="email">
        <label>Votre numéro de téléphone * :</label>
        <input name="your-tel-615" value="" size="40" class="form-control text tel validates-as-required validates-as-tel"   type="tel">
        <label>Sujet :</label>
        <input name="your-subject" value="" size="40" class="form-control text"  type="text">
        <label>Votre ville :</label>
        <input name="your-ville" value="" size="40" class="form-control text"  type="text">
        <label>Votre message * :</label>
        <textarea name="your-message" cols="40" rows="10" class="form-control textarea validates-as-required"  ></textarea>
        <input type="submit" name="send" value="Envoyer"/>
    </form>
            <?php 
            
            ?>
        </form>
    </div>
</body>
</html>