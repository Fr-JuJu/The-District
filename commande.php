<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
    <link rel="stylesheet" href="assets/css/categorie.css">
    <link rel="shortcut icon" type="image/png" href="./assets/img/images_the_district/the_district_brand/favicon.png">

    <title>The District</title>
</head>
<body>
<?php
    require_once('header.php')
?>
      <div class="container">
        <div class="row cartee justify-content-center">
      <div class="card mt-4 g-0 col-6" style="max-width: 700px;">
        <div class="row g-0">
          <div class="col-md-4">
            <div class="icon"><img src="./assets/img/images_the_district/category/asian_food_cat.jpg" class="img-fluid rounded-start" alt="..."></div>
          </div>
          <div class="col-md-8">
            <div class="card-body">
              <h5 class="card-title">Sushi</h5>
              <p class="card-text">Des bons sushi comme en Asie</p>
              <div class="bbtn justify-content-end">
                <h1>Quantité :</h1>
              <input class="input_style" type="number" tabindex="5" min="1" max="23" required>
            </div>
            </div>
          </div>
        </div>
      </div>
    </div>
    </div>
           <br><br><br><br>
          <div class="container">
            <div class="row">
      <form class="row g-3 needs-validation" action="script commande.php" method="post" novalidate>
        <div class="col-md-6 col-md-12 ">
          <label for="validationCustom01" class="form-label">Nom et Prénom</label>
          <input type="text" name="nom prenom" class="form-control" id="validationCustom01" id="NomJS" required>
          <div class="invalid-feedback">
            Ce Champ est obligatoire.
          </div>
        </div>
        <div class="col-4 col-md-6">
          <label for="validationCustomUsername" class="form-label">Email</label>
          <div class="input-group has-validation">
            <input type="email" name="Email" class="form-control" id="validationCustomUsername" id="emailJS" aria-describedby="inputGroupPrepend" required>
            
            <div class="invalid-feedback">
              Ce Champ est obligatoire.
            </div>
          </div>
        </div>
        <div class="col-4 col-md-6">
          <label for="validationCustom03" class="form-label">Téléphone</label>
          <input type="number" step="any" maxlength="10" name="tel" class="form-control"  id="validationCustom03" id="telephoneJS" required>
          <div class="invalid-feedback">
            Ce Champ est obligatoire.
          </div>
        </div>
        <div class="col-6 col-md-12 ">
            <label for="votreadresse" class="form-label">Votre demande</label>
            <textarea class="form-control" name="demande" rows="3" id="votreadresseJS" required></textarea>
          <div class="invalid-feedback">
            Ce Champ est obligatoire.
          </div>
        </div>
        <div class="col-12">
          <div class="form-check">
            <input class="form-check-input" type="checkbox" value="" id="invalidCheck" required>
            <label class="form-check-label" for="invalidCheck">
                Accepter les termes et conditions
            </label>
            <div class="invalid-feedback">
                Ce Champ est obligatoire.
            </div>
          </div>
        </div>
        <div class="col-12 d-flex justify-content-end">
          <button class="btn btn-dark" type="submit">Envoyer</button>
        </div>
      </form>
    </div>
    </div>
      <br><br>
      <?php
    require_once('footer.php')
?>
      <script src="./assets/js/Form.js"></script>
      <script src="./assets/js/button.js"></script>
        <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous"></script>
</body>
</html>