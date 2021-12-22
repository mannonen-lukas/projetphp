<?php
    /**
     * Génère le menu de la nav en forma mobile
     */
    function menuMobil(array $menu)
    { 
        $nav = '';// création de la variable nav vide 
        foreach ($menu as $subMenu) {
            //A ma variable tu concatènes le menu
            $nav .= '<a class="dropdown-item" href="?page=' . $subMenu[0] . '">' . $subMenu[1] . '</a>';
        }
        return $nav;
    }
    /**
     * Génère le menu de la nav en forma web
     */
    function menuWeb(array $menu)
    { 
        $nav = '';// création de la variable nav vide 
        foreach ($menu as $subMenu) {
            //A ma variable tu concatènes le menu
            $nav .= '<a class="navButton" href="?page=' . $subMenu[0] . '">' . $subMenu[1] . '</a>';
        }
        return $nav;
    }
    /**
     * Génère le contenue de la page
     */
    function renderPage(?String $content)
    {
        if(!is_null($content)){
            return $content;
        }
    }
    // Utiles pour afficher le contenue d'une variable ainsi que sont type
    function printVar($var)
    {
        echo '<pre>';
        var_dump($var);
        echo '</pre>';
    }
    // On regarde s'il y'a un page dans l'url en GET
    $page_num = 1; // Tu commence à la page "id=1"
    if(isset($_GET['page'])){
        $page_num = (int) $_GET['page'];
    }
    // On récupére le contenu du fichier xml
    $fichier = 'assets/xml/source.xml';
    $xml = simplexml_load_file($fichier);

    // On dit que la page n'est pas false
    $myPage = !is_null($page_num);

    // On créer le contenu du menu et de la page si la page est définie dans GET
    $menu = [];// Création d'un tableau vide
    $content = null;
    $title = 'Homepage';
    foreach($xml->page as $page){ //Pour chaque page 
        $id = (int) $page->attributes()->id;//Attribut "id" de chaque page
        $menu[] = [$id, $page->menu];//On remplie le tableau avec id et le menu de chaque page
        if($myPage  && $id === $page_num){//Si ma page est définie et que l'id est stictement = au numéro de page alors
            $title = $page->title;
            $content = $page->content;
        }
    }
?>