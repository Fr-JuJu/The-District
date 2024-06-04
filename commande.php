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
       <div class="nav">
        <div class="menu"> </div>
        <div class="logo">
            <img src="./assets/img/images_the_district/logo-removebg-preview.png" width="30%">    
        </div>
        <div class="acpc">
            <a href="./index.html" style="text-decoration: none;" >Accueil</a> 
            <a href="./categorie.html" style="text-decoration: none;">Catégorie</a>  
            <a href="./plats.html"style="text-decoration: none;" >Plats</a>
            <a href="./form.html" style="text-decoration: none;" >Contact</a>
        </div>
      </div> 

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
      <form class="row g-3 needs-validation" novalidate>
        <div class="col-md-6 col-md-12 ">
          <label for="validationCustom01" class="form-label">Nom et Prénom</label>
          <input type="text" class="form-control" id="validationCustom01" id="NomJS" required>
          <div class="invalid-feedback">
            Ce Champ est obligatoire.
          </div>
        </div>
        <div class="col-4 col-md-6">
          <label for="validationCustomUsername" class="form-label">Email</label>
          <div class="input-group has-validation">
            <input type="text" class="form-control" id="validationCustomUsername" id="emailJS" aria-describedby="inputGroupPrepend" required>
            
            <div class="invalid-feedback">
              Ce Champ est obligatoire.
            </div>
          </div>
        </div>
        <div class="col-4 col-md-6">
          <label for="validationCustom03" class="form-label">Téléphone</label>
          <input type="text" class="form-control" maxlength="10" id="validationCustom03" id="telephoneJS" required>
          <div class="invalid-feedback">
            Ce Champ est obligatoire.
          </div>
        </div>
        <div class="col-6 col-md-12 ">
            <label for="votreadresse" class="form-label">Votre demande</label>
            <textarea class="form-control" rows="3" id="votreadresseJS" required></textarea>
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
        <div class="footer">
          <div class="footer1">
            <img src="./assets/img/Capture d’écran du 2024-04-11 13-49-52.png" width="95%">    </div>
        <div class="res">
            <img src="./assets/img/360_F_597445983_7n0977E825fXaLV7pguI88rDEEEATw9c-removebg-preview.png" width="25%">   
        </div>
      </div>
      <script src="./assets/js/Form.js"></script>
      <script src="./assets/js/button.js"></script>
        <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous"></script>
</body>
</html>