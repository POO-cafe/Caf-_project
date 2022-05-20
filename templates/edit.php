<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Formulaire d'ajout</title>
    <!-- CSS only -->

    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0-beta1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-0evHe/X+R7YkIZDRvuzKMRqM+OrBnVFBL6DOitfPri4tjfHxaWutUpFmBp4vmVor" crossorigin="anonymous">
    <link rel="stylesheet" href="css/style.css">
    <!-- JavaScript Bundle with Popper -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0-beta1/dist/js/bootstrap.bundle.min.js" integrity="sha384-pprn3073KE6tl6bjs2QrFaJGz5/SUsLqktiwsUTF55Jfv3qYSDhgCecCxMW52nD2" crossorigin="anonymous"></script>
</head>

<body>

        <hearder>
        <?php require_once 'layouts/header.php'; ?>
        </header>
        <main>
            <section id="formsSection">
                <div class="insertCoffeeForms">
                    <div class="split2 left2">
                    </div>
                    <div class="split2 right2 ">
                        <div class="row centered2 p-0">
                            <div class="col middleForm">
                            <h3>Ajout d'un café</h3>
                                <form action="" method="post" enctype="multipart/form-data">

                                <div class="mb-3">
                                    <label for="nom" class="form-label"><?php echo $coffe->getNom() ?></label>
                                    <input type="text" name="nom" class="form-control" id="nom" placeholder="Nom">
                                </div>

                                <div class="mb-3">
                                    <label for="type" class="form-label"><?php echo $coffe->getType() ?></label>
                                    <input type="text" name="type" class="form-control" id="type" placeholder="Arabica ou Robusta">
                                </div>

                                <div class="mb-3">
                                    <label for="pays" class="form-label"><?php echo $coffe->getPays() ?></label>
                                    <input type="text" name="pays" class="form-control" id="pays" placeholder="Pays">
                                </div>

                                <div class="mb-3">
                                    <label for="img" class="form-label"><?php echo $coffe->getPhotos() ?></label>
                                    <input class="form-control" name="img" type="file" id="img">
                                </div>

                                <div class="mb-3">
                                    <label for="prix" class="form-label"><?php echo $coffe->getPrix() ?></label>
                                    <input type="text" name="prix" class="form-control" id="prix" placeholder="Prix">
                                </div>

                                <div class="mb-3">
                                    <label for="profil_aromatique" class="form-label"><?php echo $coffe->getProfil_aromatique() ?></label>
                                    <textarea class="form-control" name="profil_aromatique" id="profil_aromatique" rows="3"></textarea>
                                </div>

                                <button class="btn btn-seconday">Envoyer</button>

                                </form>
                            </div>
                        </div>
                    </div>        
                </div>
                
            </section>
        </main>

</body>

<footer>
    <?php require_once 'layouts/footer.php';?>
</footer>

</html>