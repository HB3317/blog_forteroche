<?php 
    /** 
     * Affichage de la partie admin : liste des articles avec un bouton "modifier" pour chacun. 
     * Et un formulaire pour ajouter un article. 
     */
?>

<h2>Monitoring</h2>

<div class="adminArticle">

    <div class="articleLine monitoringLine monitoringHeader">
    <div class="monitoringTitle">
        <a href="index.php?action=monitoring&sort=title&order=ASC">Titre ▲</a>
        <a href="index.php?action=monitoring&sort=title&order=DESC">▼</a>
    </div>

    <div class="monitoringViews">
        <a href="index.php?action=monitoring&sort=views&order=ASC">Vues ▲</a>
        <a href="index.php?action=monitoring&sort=views&order=DESC">▼</a>
    </div>

    <div class="monitoringComments">
        <a href="index.php?action=monitoring&sort=comments&order=ASC">Commentaires ▲</a>
        <a href="index.php?action=monitoring&sort=comments&order=DESC">▼</a>
    </div>

    <div class="monitoringDate">
        <a href="index.php?action=monitoring&sort=date&order=ASC">Date ▲</a>
        <a href="index.php?action=monitoring&sort=date&order=DESC">▼</a>
    </div>
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