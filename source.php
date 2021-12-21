<?php
    // Functions
    // display menu
    function renderMenu(array $menu)
    {
        foreach ($menu as $sub) {
            echo '<a href="?page=' . $sub[0] . '">' . $sub[1] . '</a>';
        }
    }

    // display content base on page
    function renderPage(?String $content)
    {
        if(!is_null($content)){
            echo $content; // page content
        }
    }

    // utilities
    function printVar($var)
    {
        echo '<pre>';
        var_dump($var);
        echo '</pre>';
    }


    // on check si y'a un page dans l'url en GET
    $page_num = null;
    if(isset($_GET['page'])){
        $page_num = $_GET['page'];
    }
    // load le contenu du fichier
    $fichier = 'source.xml';
    $xml = simplexml_load_file($fichier);

    // on set a true ou false le faite d'avoir un id de page
    $isOnPage = !is_null($page_num);

    // on créer le contenu du menu et de la page si la page est définie dans GET
    $menu = [];
    $content = null;
    $title = 'Homepage';
    foreach($xml->page as $page){
        $id = $page->attributes()->id;
        $menu[] = [$id, $page->menu];
        if($isOnPage  && (int) $id === (int) $page_num){
            $content = $page->content;
            $title = $page->title;
        }
    }
?>