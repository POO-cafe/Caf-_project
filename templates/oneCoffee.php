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

    <?php foreach($listAllCoffe as $coffee):?> 

        <div class="container">
            <div class="row">
                <div class="col-5">
                    <img src="<?php echo $coffee->setPhotos(); ?>" alt="">
                </div>
                <div class="col-7">
                <h2><?php echo $coffee->setNom(); ?></h2>
                <ul>
                    <li><p>Variété</p><?php echo $coffee->setType(); ?></li>
                    <li><p>Pays d'origine</p><?php echo $coffee->setPays(); ?></li>
                    <li><p>Profil aromatique</p><?php echo $coffee->setProfil_aromatique(); ?></li>
                    <li><p>Prix au kilo</p><?php echo $coffee->setPrix(); ?></li>
                </ul>
                    <a href="/delete/avis?id=<?php echo $coffee->getId(); ?>" class="btn btn-dark">Supprimer</a>
                    <a href="/update/avis?id=<?php echo $coffee->getId(); ?>" class="btn btn-dark">Editer</a>
                </div>
            </div>
        </div>
        <?php endforeach;?>

    <footer>
    <?php require_once 'layouts/footer.php';?>
    </footer>

</html>