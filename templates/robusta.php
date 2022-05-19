<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Robusta</title>
</head>
<body>
<header>
        <?php echo require_once 'templates/layouts/header.php'?>
    </header>
    <main>
        <!---photo + lien + titre--->
        <!---boucle img titre  contenu *6--->
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
        <!---footer à centrer---->
        <?php echo require_once 'templates/layouts/footer.php'?>
    </footer>
</body>
</html>