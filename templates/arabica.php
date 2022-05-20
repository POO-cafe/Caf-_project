<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

        <!-- CSS only -->

    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0-beta1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-0evHe/X+R7YkIZDRvuzKMRqM+OrBnVFBL6DOitfPri4tjfHxaWutUpFmBp4vmVor" crossorigin="anonymous">
   <link rel="stylesheet" href="css/style.css">
    <title>Arabica</title>
</head>

<body>
<hearder>
<?php require_once 'layouts/header.php';?>
</header>
    <main class="m-2">
        <div class="row w-75 m-auto">
            <!---photo + lien + titre--->
            <!---boucle img titre  contenu *6--->
            <h1 class="hRobustarabica mb-3 pt-3">Arabica</h1>
            <p class="pRobustarabica pt-3 mb-5">Le café arabica est un café doux, plus ou moins fruité et aromatique, issu de haute altitude tandis que le café robusta est puissant, amer, terreux issu de basse altitude.
L'arabica et le robusta sont deux espèces botaniques originaires d’Afrique qui sont les plus cultivées dans le monde. Cependant, il existe une très grande diversité de caféiers dans le monde entier. Les caféiers appartiennent au genre Coffea de la famille des rubiacées. Le genre Coffea compte près de 80 espèces et plusieurs centaines de variétés différentes. Les espèces de caféiers les plus répandues et les plus cultivées sont le Coffea arabica et le Coffea canephora. Comme son nom l'indique, le fruit du premier caféier donne l'arabica et le second donne le robusta. Nous allons donc détailler ces deux espèces botaniques.</p>
            
            <?php foreach($listAllArabica as $arabica):?> 
                <?php
                $chaine = $arabica->getProfil_aromatique();
                $shortText = substr($chaine,0,100) . "..."; 
                ?>
                <div class="col-lg-4 col-md-12 mb-1 p-1 ">
                    <div class="card shadow p-3 mb-5 bg-body rounded arabic d-flex">

                            <a href="oneCoffee?id=<?= $arabica->getID()?>"><img class="zoomImgCard card-img-top" src="img_products/<?= $arabica->getPhotos(); ?>" alt="café"></a>

                            <h2 class="card-title"><?= $arabica->getNom(); ?></h2>
                        <div class="card-body">
                            <h3 class="card-title">Variété : <?=$arabica->getType(); ?></h3>
                            <p class="card-text">Origine : <?= $arabica->getPays(); ?></p>
                            <p class="card-text">Prix/kg : <?= $arabica->getPrix(); ?></p>
                        </div>
                    </div>
                </div>
                
            <?php endforeach;?>
        </div>
    </main>
  
        <?php require_once 'layouts/footer.php';?>
    
</body>

</html>
