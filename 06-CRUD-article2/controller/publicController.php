<?php
// Dependencies
require_once "model/articlesModel.php";
require_once "model/functionDateModel.php";
require_once "model/cutTheTextModel.php";
// Pagination
require_once "model/paginationModel.php";

// Mise en place de la pagination

// existence de la variable get "pg" | toujours 1 par défaut
if(isset($_GET['pg'])){
    $pgactu = (int) $_GET['pg'];
    // si la conversion échoue ($pgactu===0)
    if(!$pgactu) $pgactu=1;
}else{
    $pgactu = 1;
}
// calcul pour la requête
$nbTotalArticles = countAllArticles($db)["nb"];
$debut_tab = ($pgactu-1)*NUMBER_ARTICLE_PER_PAGE;

$recupPagination = articlesLoadResumePagination($db,$debut_tab,NUMBER_ARTICLE_PER_PAGE);
// pas d'articles
if(!$recupPagination){
    $erreur = "Pas encore d'article";
}

// view
require_once "view/indexView.php";