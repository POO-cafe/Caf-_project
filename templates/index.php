<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <!-- CSS only -->

<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0-beta1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-0evHe/X+R7YkIZDRvuzKMRqM+OrBnVFBL6DOitfPri4tjfHxaWutUpFmBp4vmVor" crossorigin="anonymous">
   <link rel="stylesheet" href="css/style.css">
   
    <title>Page d'accueil</title>
</head>

<body>

    <header>
    <?php require_once 'layouts/header.php';?>
    </header>
    <main>
    <div class="view_port">
        <div class="polling_message">
            
        </div>
        <div class="cylon_eye"></div>
        </div>
      <div class="container">

      

        
            <div>
              <h2 class="pt-5 mb-5 hRobustarabica">Café en Grain</h2>
              <p class="pRobustarabica">Ce type de café fraichement torréfié est un incontournable pour tous les vrais amateurs. Dans les entreprises ou dans les ménages, il apporte le bonheur d'une boisson chaude préparée avec attention ainsi qu'une agréable odeur de torréfaction. Coffee-Webstore vous offre un large choix de grains de café sélectionnés par notre équipe pour leur qualité, leur constance et leur prix compétitifs. Découvrez également notre sélection de coups de cœur, nos grains Bio, nos cafés décaféinés, et surtout nos café italiens.
                Choisissez parmi les plus grandes marques comme San Marco, Lavazza, Segafredo, ou bien découvrez une torréfaction artisanale comme Voisin.
                Enfin, pensez à acheter malin en gros conditionnement pour réaliser des économies immédiates grâce à nos tarifs dégressifs !</p>
          </div>

          <div class="d-flex justify-content-around alignPictures align-items-center">
            
                <a href="/arabica" class=" text-end m-0"><img class="img_index " src="images/arabica.jpg" alt="arabica" id="left"></a>
              
                <a href="/robusta" class="m-0"><img  class="img_index " src="images/robusta.jpg" alt="robusta" id="right"></a>
              
          </div>

          
      </div>
    </main>
</body>
<footer>
<?php require_once 'layouts/footer.php';?>
</footer>
</html>