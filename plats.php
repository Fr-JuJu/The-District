<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
    <link rel="stylesheet" href="assets/css/plat.css">
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
            <a href="..."style="text-decoration: none;" >Plats</a>
            <a href="./form.html" style="text-decoration: none;" >Contact</a>
        </div>
      </div> 
      <img src="./assets/img/images_the_district/bg1.jpeg" width="100%">
      <div class="tt">
      <p>Tous les Plats :</p></div>
<div class="container-fluid">
    <div class="row g-0 justify-content-around">
      <div class="card mt-4 mb-3 col-6" style="max-width: 700px;">
        <div class="row g-0">
          <div class="col-md-4">
            <div class="icon"><img src="./assets/img/food/buffalo-chicken.jpg" class="img-fluid rounded-start" alt="..."></div>
          </div>
          <div class="col-md-8">
            <div class="card-body">
              <h5 class="card-title">Buffalo Wrap</h5>
              <p class="card-text">Gouter à notre délicieux wrap avec le Buffalo</p>
              <button type="button" class="btn btn-dark col-5 mt-2 p-0 rounded-pill" onclick="buf()">Commander</button>
            </div>
          </div>
        </div>
      </div>

      <div class="card mt-4 mb-3 col-6" style="max-width: 700px;">
        <div class="row g-0">
          <div class="col-md-4">
            <img src="./assets/img/food/Boules-de-glace.jpg" class="img-fluid rounded-start" alt="...">
          </div>
          <div class="col-md-8">
            <div class="card-body">
              <h5 class="card-title">Boules de Glaces</h5>
              <p class="card-text">Un Dessert valider par tous.</p>
              <button type="button" class="btn btn-dark col-5 p-0 rounded-pill" onclick="bou()">Commander</button>
            </div>
          </div>
        </div>
      </div>

      <div class="card mt-4 mb-3 col-6" style="max-width: 700px;">
        <div class="row g-0">
          <div class="col-md-4">
            <img src="./assets/img/food/cam.jpg" class="img-fluid rounded-start" alt="...">
          </div>
          <div class="col-md-8">
            <div class="card-body">
              <h5 class="card-title">Camenbert</h5>
              <p class="card-text">Venez gouter nos camenbert pure Français.</p>
              <button type="button" class="btn btn-dark col-5 mt-2 p-0 rounded-pill" onclick="cam()">Commander</button>
            </div>
          </div>
        </div>
      </div>

      <div class="card mt-4 mb-3 col-6" style="max-width: 700px;">
        <div class="row g-0">
          <div class="col-md-4">
            <img src="./assets/img/food/cesar_salad.jpg" class="img-fluid rounded-start" alt="...">
          </div>
          <div class="col-md-8">
            <div class="card-body">
              <h5 class="card-title">Salade Césart</h5>
              <p class="card-text">La salade la plus gourmande de the district.</p>
              <button type="button" class="btn btn-dark col-5 mt-2 p-0 rounded-pill" onclick="sal()">Commander</button>
            </div>
          </div>
        </div>
      </div>
    </div>
</div>
        <br>
        <div class="container-fluid">
            <div class="row justify-content-between">
            <button type="button" class="btn btn-dark  col-3 mt-5 p-2 rounded-pill" onclick="precedent()">Précédent</button>
            <button type="button" class="btn btn-dark col-3 mt-5 p-2 rounded-pill" onclick="suivant()">Suivant</button>
        </div>
          </div>
        <br>
        <div class="footer">
          <div class="footer1">
            <img src="./assets/img/Capture d’écran du 2024-04-11 13-49-52.png" width="95%">    </div>
        <div class="res">
            <img src="./assets/img/360_F_597445983_7n0977E825fXaLV7pguI88rDEEEATw9c-removebg-preview.png" width="25%">   
        </div>
      </div>
      <script src="./assets/js/button.js"></script>
        <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous"></script>
</body>
</html>