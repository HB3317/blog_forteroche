<?php 
    /** 
     * Affichage de la partie admin : liste des articles avec un bouton "modifier" pour chacun. 
     * Et un formulaire pour ajouter un article. 
     */
    $sort = $_GET['sort'] ?? 'date';
    $order = $_GET['order'] ?? 'DESC';
?>

<h2>Tableau de bord</h2>

<div class="adminArticle">

    <div class="articleLine monitoringLine monitoringHeader">
    <div class="monitoringTitle">
        <a  class="<?= ($sort === 'title' && $order === 'ASC') ? 'sortActive' : '' ?>"
            href="index.php?action=monitoring&sort=title&order=ASC">Titre ▲</a>
        <a  class="<?= ($sort === 'title' && $order === 'DESC') ? 'sortActive' : '' ?>"
            href="index.php?action=monitoring&sort=title&order=DESC">▼</a>
    </div>

    <div class="monitoringViews">
        <a  class="<?= ($sort === 'views' && $order === 'ASC') ? 'sortActive' : '' ?>"
            href="index.php?action=monitoring&sort=views&order=ASC">Vues ▲</a>
        <a  class="<?= ($sort === 'views' && $order === 'DESC') ? 'sortActive' : '' ?>"
            href="index.php?action=monitoring&sort=views&order=DESC">▼</a>
    </div>

    <div class="monitoringComments">
        <a  class="<?= ($sort === 'comments' && $order === 'ASC') ? 'sortActive' : '' ?>"
            href="index.php?action=monitoring&sort=comments&order=ASC">Commentaires ▲</a>
        <a  class="<?= ($sort === 'comments' && $order === 'DESC') ? 'sortActive' : '' ?>"
            href="index.php?action=monitoring&sort=comments&order=DESC">▼</a>
    </div>

    <div class="monitoringDate">
        <a  class="<?= ($sort === 'date' && $order === 'ASC') ? 'sortActive' : '' ?>"
            href="index.php?action=monitoring&sort=date&order=ASC">Date ▲</a>
        <a  class="<?= ($sort === 'date' && $order === 'DESC') ? 'sortActive' : '' ?>"
            href="index.php?action=monitoring&sort=date&order=DESC">▼</a>
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