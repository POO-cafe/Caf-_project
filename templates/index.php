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
      <div class="container h-100">
          <div class="d-flex mt-5 justify-content-around">
            
                <a href="/arabica" class=" text-end m-0"><img class="img_index " src="images/arabica.jpg" alt="arabica"></a>
              
                <a href="/robusta" class="m-0"><img  class="img_index " src="images/robusta.jpg" alt="robusta"></a>
              
          </div>
      </div>
    </main>
</body>
<footer>
<?php require_once 'layouts/footer.php';?>
</footer>
</html>