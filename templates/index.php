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

    <hearder>
<?php require_once 'layouts/header.php';?>
</header>
    <main>
      <dic class="container">
          <div class="row mt-5">
              <div class="col-lg-6 col-12  d-flex pt-2">
                <a href="/arabica" class="align-items-lg-end"> <img class="img_index rounded mx-auto d-block " src="images/arabica.png" alt="arabica"></a>
              </div>
              <div class="col-lg-6 col-12  d-flex justify-content-start pt-2">
                <a href="/robusta" class=""><img  class="img_index rounded mx-auto d-block  " src="images/robusta.png" alt="robusta"></a>
              </div>
          </div>
      </dic>
    </main>
</body>
<footer>
<?php require_once 'layouts/footer.php';?>
</footer>
</html>