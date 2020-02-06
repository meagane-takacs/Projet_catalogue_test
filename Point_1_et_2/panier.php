<!--MA PAGE PANIER EST LA PAGE QUI MONTRE A L'ACHETEUR CE QU'IL A SELECTIONNER DANS SON TABLEAU
 C'EST LE FICHIER QUI RECUPERE LES INFOS QUE L'UTILISATEUR A RENTRE-->


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

<?php
// Ici j'ai mon tableau que je remet pour avoir les valeurs, pour les afficher lorsque l'utilisateur remplira son panier et qu'on lui montrera les articles choisi.
$articles = [
    ['photos/Bracelet1.jpg', 'Bracelet', 200],
    ['photos/Montre.jpg', 'Montre', 300],
    ['photos/collier.jpg', 'Collier', 300],
];

//J'inclue mon fichier fonction, c'est ma boîte à outil (tournevis)
include("functions.php");


print('<pre>');

// Si l'utilisateur n'a pas rempli le formulaire et que le retour est vide,
if (empty ($_POST['choix'])) {
    //J'affiche ceci:
    echo "Votre panier est vide";
}

//***** Je reprends ma key qui définissait ma liste d'article dans mon fichier catalogue_5_panier.php
//*** Ceci permet de cibler un article lorsqu'on le coche.
else {
    $sum =0;
// Pour mon tableau choix, je donne une clé qui me permet d'avoir un élément du tableau (key)
    foreach ($_POST['choix'] as $key => $unchoix) {
// Je transforme tableau article avec l'élément un choix, en une variable article.
        $article = $articles[$unchoix];
        //var_dump($article)
//J'affiche ma fonction afficheArticlebis avec les paramètre clé, nom, prix, et img)
        afficheArticlebis($key, $article[1], $article[2], $article[0]);
        $sum = totalPanier($sum,$article[2]);
    }
echo "Total du panier : " . $sum . " euros";
}




print('</pre>')
?>
</body>
</html>
