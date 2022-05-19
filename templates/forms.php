<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Formulaire d'ajout</title>
    <!-- CSS only -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0-beta1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-0evHe/X+R7YkIZDRvuzKMRqM+OrBnVFBL6DOitfPri4tjfHxaWutUpFmBp4vmVor" crossorigin="anonymous">
    <!-- JavaScript Bundle with Popper -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0-beta1/dist/js/bootstrap.bundle.min.js" integrity="sha384-pprn3073KE6tl6bjs2QrFaJGz5/SUsLqktiwsUTF55Jfv3qYSDhgCecCxMW52nD2" crossorigin="anonymous"></script>
</head>
    <body>
        <form action="" method="post">
            <div class="mb-3">
                <label for="nom" class="form-label">Nom</label>
                <input type="text" class="form-control" id="nom" placeholder="Nom">
            </div>

            <div class="mb-3">
                <label for="type" class="form-label">Type</label>
                <input type="text" class="form-control" id="type" placeholder="Arabica ou Robusta">
            </div>

            <div class="mb-3">
                <label for="pays" class="form-label">Pays</label>
                <input type="text" class="form-control" id="pays" placeholder="Pays">
            </div>

            <div class="mb-3">
                <label for="img" class="form-label">Photo</label>
                <input class="form-control" type="file" id="img">
            </div>

            <div class="mb-3">
                <label for="prix" class="form-label">Prix</label>
                <input type="text" class="form-control" id="prix" placeholder="Prix">
            </div>

            <div class="mb-3">
                <label for="profil_aromatique" class="form-label">Profil aromatique</label>
                <textarea class="form-control" id="profil_aromatique" rows="3"></textarea>
            </div>

            <button class="btn btn-primary">Envoyer</button>

        </form>
    </body>
</html>