<?php 
    /** 
     * Affichage de la partie admin : liste des articles avec un bouton "modifier" pour chacun. 
     * Et un formulaire pour ajouter un article. 
     */
?>

<h2>Monitoring</h2>

<div class="adminArticle">

    <div class="articleLine monitoringLine monitoringHeader">
        <div class="monitoringTitle">Titre</div>
        <div class="monitoringViews">Vues</div>
        <div class="monitoringComments">Commentaires</div>
        <div class="monitoringDate">Date</div>
    </div>

    <?php foreach ($monitoringArray as $article) { ?>
        <div class="articleLine monitoringLine">
            <div class="monitoringTitle"><?= $article['title'] ?></div>
            <div class="monitoringViews"><?= $article['views'] ?></div>
            <div class="monitoringComments"><?= $article['comments_count'] ?></div>
            <div class="monitoringDate"><?= $article['date_creation'] ?></div>
        </div>
    <?php } ?>

</div>