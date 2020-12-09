<!-- La Page1 fichier page1.php sert à être afficher, il envoie pour l'instant la liste des articles se trouvant dans le tableau (BDD) du fichier articles.php,
fichier affichable dans index.php (UI) par défaut avant le choix de l'utilisateur --> 

<?php
require_once "articles.php"; // réception des données

// var_dump($_articles); // Permet de se repérer sur le navigateur lors des tests
?>

<h2>Page 1</h2>

<!-- 
    Foreach et sa suite d'écriture permettent de générer un article en utilisant les données réceptionnées par require,
    Automantiquement à chaque nouvelle entrée dans le fichier articles.php (nouvel article saisi dans le tableau) foreach génére un article affichable dans le fichier vuearticle.php
-->
<?php foreach($_articles as $index => $article) : ?>

<article>
    <h3><?= $article["titre"] ?></h3>
    <p class="news main"><?= substr($article["description"], 0, 100) ?>...<a href="index.php?page=vuearticle&art=<?=$index?>" >Lire la suite...</a></p>
    <div class="art">
        <div class="img-cont"><img class="img-resp" src="img/<?= $article["image"] ?>" alt=""></div>
    </div>
</article>

<?php endforeach ?>