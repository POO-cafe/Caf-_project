<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <!-- CSS only -->

<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0-beta1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-0evHe/X+R7YkIZDRvuzKMRqM+OrBnVFBL6DOitfPri4tjfHxaWutUpFmBp4vmVor" crossorigin="anonymous">
   <link rel="stylesheet" href="css/style.css">
   
    <title>Produits</title>
</head>

<body>

    <hearder>
    <?php require_once 'layouts/header.php';?>
    </header>

   

        <div class="container d-flex justify-content-around alignPictures align-items-center">
            <div class="row">
                <div class="col-5">
                    <img class="img-thumbnail rounded float-start " src="img_products/<?= $coffeeObject->getPhotos(); ?>" alt="">
                </div>
                <div class="col-5 ml-5 p-5">
                <h2 class="m-2 titleOneCoffee"><?= $coffeeObject->getNom(); ?></h2>
                <ul class="p-0 m-2">
                    <li class="listOneCoffee">Variété : <?= $coffeeObject->getType(); ?></li>
                    <li class="listOneCoffee">Pays d'origine : <?= $coffeeObject->getPays(); ?></li>
                    <li class="listOneCoffee">Profil aromatique : <?= $coffeeObject->getProfil_aromatique(); ?></li>
                    <li class="listOneCoffee">Prix au kilo : <?= $coffeeObject->getPrix(); ?> € </li>
                </ul>
<<<<<<< HEAD
                    <a href="/delete?id=<?= $coffeeObject->getId(); ?>" class="btn btn-dark m-2">Supprimer</a>
                    <a href="/edit?id=<?= $coffeeObject->getId(); ?>" class="btn btn-dark m-2">Editer</a>
=======
                    <a href="/delete?id=<?= $coffeeObject->getId(); ?>" class="btn btn-dark">Supprimer</a>
<<<<<<< HEAD
                    <a href="/update/avis?id=<?= $coffeeObject->getId(); ?>" class="btn btn-dark">Editer</a>
=======
                    <a href="/edit?id=<?= $coffeeObject->getId(); ?>" class="btn btn-dark">Editer</a>
>>>>>>> 33f171c63c7054e196f2f01b8a385c5de1731275
>>>>>>> 9e6f518e450a67615077c371d61c42d2629c54ba
                </div>
            </div>
        </div>
        

    
    <?php require_once 'layouts/footer.php';?>
    
</html>