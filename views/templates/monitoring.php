<?php 
    /** 
     * Affichage du tableau de bord de l'administration, avec le tri des articles par titre, vues, commentaires et date.
     * Les articles sont affichés dans un tableau avec les colonnes Titre, Vues, Commentaires et Date.
     * Les colonnes sont triables par ordre croissant ou décroissant. 
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
            <div class="monitoringDate"><?= Utils::convertDateToFrenchFormat(new DateTime($article['date_creation'])) ?></div>
        </div>
    <?php } ?>

</div>