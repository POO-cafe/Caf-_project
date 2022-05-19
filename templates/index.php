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
        <?php echo require_once '../templates/layouts/header.php'?>
    </header>
    <main>
        <!---photo + lien + titre--->
        <!---boucle img titre  contenu *2--->
        <section>
            <h2>Titre</h2>
            <a href="#"><img src="" alt="café"></a>
            <p>Contenue</p>
        </section>
        <section>
            <h2>Titre</h2>
            <a href="#"><img src="" alt="café"></a>
            <p>Contenue</p>
        </section>
    </main>
    <footer>
        <!---footer---->
        <?php echo require_once '../templates/layouts/footer.php'?>
    </footer>
</body>

</html>