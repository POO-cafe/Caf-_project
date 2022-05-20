<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <!-- CSS only -->

<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0-beta1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-0evHe/X+R7YkIZDRvuzKMRqM+OrBnVFBL6DOitfPri4tjfHxaWutUpFmBp4vmVor" crossorigin="anonymous">
   <link rel="stylesheet" href="css/style.css">
    <title>Robusta</title>
</head>
<body>
<header>
<?php require_once 'layouts/header.php';?>
</header>
    <main class="m-2">
        <div class="row w-75 m-auto">

            <!---photo + lien + titre--->
            <!---boucle img titre  contenu *6--->
            <h1 class="hRobustarabica mb-3 pt-3">Robusta</h1>
            <p class="pRobustarabica pt-3 mb-5">Le café robusta tient son nom de la robustesse et de la résistance de son arbre. Ce caféier peut atteindre près d’une dizaine de mètres et résiste à de nombreuses maladies, insectes ou conditions météorologiques extrêmes. Il craint néanmoins le gel. Le café robusta est cultivé dans les plaines à une altitude plus basse que l’arabica, entre 0 et 800 mètres d'altitude sous un climat chaud oscillant entre 24 et 30°C et souvent en plein soleil. Dans ces conditions et grâce à sa croissance très rapide, cette espèce de caféier est plus facile à cultiver que l'arabica. Les fleurs du robusta fleurissent de façon irrégulière et son fruit mûrit au bout de dix à onze mois. Le caféier robusta donne des grains jaunes à bruns.</p>
            <?php foreach($listAllRobusta as $robusta):?> 
                <?php
                $chaine = $robusta->getProfil_aromatique();
                $shortText = substr($chaine,0,100) . "..."; 
                ?>
                <div class="col-lg-4 col-md-12 mb-1 p-1">
                    <div class="card shadow p-3 mb-5 bg-body rounded robust">
                            <a href="oneCoffee?id=<?= $robusta->getId() ?>"><img class="zoomImgCard card-img-top" src="img_products/<?= $robusta->getPhotos(); ?>" alt="café"></a>
                            <h2 class="card-title"><?= $robusta->getNom(); ?></h2>
                        <div class="card-body">
                            <h3 class="card-title">Variété : <?=$robusta->getType(); ?></h3>
                            <p class="card-text">Origine : <?= $robusta->getPays(); ?></p>
                            <p class="card-text">Prix/kg : <?= $robusta->getPrix(); ?></p>
                        </div>
                    </div>
                </div>
                
            <?php endforeach;?>
        </div>
    </main>
   
        <?php require_once 'layouts/footer.php';?>
    
</body>
</html>




