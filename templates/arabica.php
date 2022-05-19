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
    <main>
        <!---photo + lien + titre--->
        <!---boucle img titre  contenu * 6--->
        <?php foreach($listAllArabica as $arabica):?> 
            <?php
            $chaine = "{$arabica['profil_aromatique']}";
            $shortText = substr($chaine,0,100) . "..."; 
            ?>
            <section>
                <div class="col-lg-6 col-md-12">
                    <div class="card">
                        <a href="#"><img src="<?php echo $arabica->getPhotos(); ?>" alt="café"></a>
                        <h2><?php echo $arabica->getNom(); ?></h2>
                    <div class="card--body">
                        <p><?php echo $arabica->getPays(); ?></p>
                        <p><?php echo $arabica->getPrix(); ?></p>
                        <p><?php echo $arabica->getProfil_aromatique(); ?></p>
                    </div>
                    </div>
                </div>
            </section>
        <?php endforeach;?>

    </main>
    <footer>
        <!---footer à centrer---->
        <p>&copy; Copyright Café Grand Choix Tous droit réserver</p>
    </footer>
</body>

</html>