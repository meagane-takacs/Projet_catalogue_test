<!--CE FICHIER EST UNE BOITE A OUTIL OU IL Y A TOUTES MES FONCTIONS-->

<?php

// Ma première fonction permet d'appeler chaque article de façon indépendante.
function afficheArticle1()
{
    $article1 = array('photos/Bracelet1.jpg', 'Bracelet', 200);
    echo $article1[0];
    echo $article1[1];
    echo $article1[2];
}


function afficheArticle2()
{
    $article2 = array('photos/Montre.jpg', 'Montre', 300);
    echo $article2[0];
    echo $article2[1];
    echo $article2[2];
}

function afficheArticle3()
{
    $article3 = array('photos/collier.jpg', 'Collier', 300);
    echo $article3[0];
    echo $article3[1];
    echo $article3[2];
}


function afficheArticle($article)

// fonction avec le foreach de base vu avec Alexandre (On rentre dans un tableau dans une première boucle puis dans un second dans une deuxième)
{

    ?>
    <div class="<?php echo 'container1'?>">
        <?php
        foreach ($article as $key2=> $attribut) {
            if  ($key2 === 0) {
                ?>
                <img class="photos" src="<?php echo $attribut ?>"/>
                <?php

            } elseif ($key2 === 1) {
                ?>
                <div class="articles">
                    <?php echo $attribut ?>
                </div>
                <?php

            } elseif  ($key2 === 2) {
                ?>
                <div class="price">
                    <p>
                        <?php echo  $attribut ?> euros
                    </p>
                </div>
                <?php
            }
        } ?>
    </div>
    <?php
}


// deuxième fonction qui est plus simple que la première mais fait la même chose et répond au consigne

function afficheArticlebis($key, $name, $price, $img)
{
   ?>
    <div class="<?php echo 'container1'?>">

          <img class="photos" src="<?php echo $img ?>"/>
          <div class="articles"><p><?php echo $name ?></p>

          </div>
          <div class="price"><p><?php echo  $price ?> euros</p>
          </div>

        <input type="checkbox" name="choix[]" class="choice" value="<?php echo $key?>">

        <label for="tentacles">Quantité:</label>
        <input type="number" id="tentacles" name="tentacles"
               min="1" max="100">
     </div>

    <?php

}



function totalPanier($sum,$price_article)
    {
        return $sum =$sum+ $price_article ;
    }




?>




