<!--LE FICHIER CATALOGUE EST LA PREMIERE PAGE QUE L'ON VOIT EN TAPANT SUR INTERNET POUR CHOISIR UN PRODUIT SI ON EST UN ACHETEUR-->


<!-- on affiche le tableau qui nous servira plus tard-->
<?php
$articles = [
    ['photos/Bracelet1.jpg', 'Bracelet', 200],
    ['photos/Montre.jpg', 'Montre', 300],
    ['photos/collier.jpg', 'Collier', 300],
];

//On inclut la fonction (c'est la boite à outils)
include("functions.php");


?>

<!DOCTYPE html>
<html>
<head>
    <title>Catalogue</title>
    <meta charset="utf-8"/>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css"
          integrity="sha384-Vkoo8x4CGsO3+Hhxv8T/Q5PaXtkKtu6ug5TOeNV6gBiFeWPGFN9MuhOf23Q9Ifjh" crossorigin="anonymous">
    <link rel="stylesheet" href="style_catalogue5.css">
</head>
<body>

<div id="Boutique">BOUTIQUE</div>

<!--Je creer mon formulaire globale qui permet de submiter-->
<form method="POST" action="panier.php">


    <?php

    //pour mon tableau articles, je donne une clef qui rend indépendant chaque éléments du tableau.
    foreach ($articles as $key => $article) {
        // afficheArticle($article) j'apelle ma fonction, avec des paramètres.
        afficheArticle($key, $article[1], $article[2], $article[0]);
    }
    ?>


    <input class="submit" type="submit" value="Ajoutez au panier">

</form>


</body>

