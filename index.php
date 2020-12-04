<!--  Partie 1 : réception des données, contôle in visu avec var_dump() de celles-ci, traitement des données -->

<?php 
var_dump($_GET); // Permet de se repérer sur le navigateur lors des tests

// Routage des données réceptionnées (collectées) ... émises par les pages comme page1.php
if(isset($_GET["page"])) {

    switch ($_GET["page"]) {
        case "page1" : $pageInclure = "page1.php";
        break;
        case "page2" : $pageInclure = "page2.php";
        break;
        case "page3" : $pageInclure = "page3.php";
        break;
        case "vuearticle" : $pageInclure = "vuearticle.php";
        break;
        default : $pageInclure = "page1.php";
    }
}
 else {
     $pageInclure = "page1.php";
 }
?>

<!--  Partie 2 : affichage HTML codé en HTML et paramétres requêtes -->
<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="css/style.css">
    <title>BLOG TPPHP1</title>
</head>
<body>
    <h1>LE BLOG FICTIF "TPPHP1" (pour la formation) </h1>
    <nav> LE MENU DU BLOG
        <ol>
            <li> <a href="index.php?page=page1"> Page1 </a></li>
            <li> <a href="index.php?page=page2"> Page2 </a></li>
            <li> <a href="index.php?page=page3"> Page3 </a></li>
    </ol>       
    </nav>
    <P class="date"></P>

    <div class="content"> </div>
<!--  
partie 3 : inclure les données traitées à afficher sur la page index.php : page UI
-->

<?php	require "html/$pageInclure" ?>

</body>
</html>