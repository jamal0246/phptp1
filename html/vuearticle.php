<!-- fichier permettant d'être afficher dans index.php (UI), il envoie l'article complet à la place de la liste d'extraits d'article du fichier articles affichable par défaut -->

<?php
require "articles.php";

var_dump($_GET["art"]); // Permet de se repérer sur le navigateur lors des tests ...

$_article = $_articles[$_GET["art"]];
?>

<p> <a href="index.php?page=page1">Retour à la liste des nouvelles - des news / </a> <br> <br> Titre de l'article : <?= $_article["titre"] ?></p>

<article>
    <p class="date"> Auteur : <?= $_article["auteur"] ?> <br> Edité le <?= $_article["date"] ?></p>
    <h2> <?= $_article["titre"] ?> </h3>
    <p class="new man"> <?= $_article["description"] ?></p>
    <div class="art">
        <div class="img_cont"> <img class="img_resp" src="img/<?= $_article["image"] ?>" alt="image"></div>
        <p class="news" > .... </p>
    </div>
</article>