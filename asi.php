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
<?php
    require_once('header.php')
?>
      <img src="./assets/img/images_the_district/bg1.jpeg" width="100%">
    
      <div class="tt">
      <p>Asian Food :</p></div>
<div class="container-fluid">
    <div class="row g-0 justify-content-around">
      <div class="card mt-4 mb-3 col-6" style="max-width: 700px;">
        <div class="row g-0">
          <div class="col-md-4">
            <div class="icon"><img src="./assets/img/images_the_district/category/asian_food_cat.jpg" class="img-fluid rounded-start" alt="..."></div>
          </div>
          <div class="col-md-8">
            <div class="card-body">
              <h5 class="card-title">Sushi</h5>
              <p class="card-text">Des bons sushi comme en Asi</p>
              <button type="button" class="btn btn-dark col-5 mt-2 p-0 rounded-pill" onclick="sus()">Commander</button>
            </div>
          </div>
        </div>
      </div>

      <div class="card mt-4 mb-3 col-6" style="max-width: 700px;">
        <div class="row g-0">
          <div class="col-md-4">
            <img src="./assets/img/food/asianfood2.jpg" class="img-fluid rounded-start" alt="...">
          </div>
          <div class="col-md-8">
            <div class="card-body">
              <h5 class="card-title">Maquis</h5>
              <p class="card-text">Des bons maquis comme en Asi</p>
              <button type="button" class="btn btn-dark col-5 p-0 rounded-pill">Commander</button>
            </div>
          </div>
        </div>
      </div>

      <div class="card mt-4 mb-3 col-6" style="max-width: 700px;">
        <div class="row g-0">
          <div class="col-md-4">
            <img src="./assets/img/food/asianfood3.png" class="img-fluid rounded-start" alt="...">
          </div>
          <div class="col-md-8">
            <div class="card-body">
              <h5 class="card-title">Ramen</h5>
              <p class="card-text">Voyager avec notre délicieux ramen</p>
              <button type="button" class="btn btn-dark col-5 mt-2 p-0 rounded-pill" >Commander</button>
            </div>
          </div>
        </div>
      </div>

      <div class="card mt-4 mb-3 col-6" style="max-width: 700px;">
        <div class="row g-0">
          <div class="col-md-4">
            <img src="./assets/img/food/asianfood4.jpg" class="img-fluid rounded-start" alt="...">
          </div>
          <div class="col-md-8">
            <div class="card-body">
              <h5 class="card-title">Soupe Miso</h5>
              <p class="card-text">Une bonne Soupe fait maison</p>
              <button type="button" class="btn btn-dark col-5 mt-2 p-0 rounded-pill" >Commander</button>
            </div>
          </div>
        </div>
      </div>
    </div>
</div>
        <br>
        <br>
        <?php
    require_once('footer.php')
?>
      <script src="./assets/js/button.js"></script>
        <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous"></script>
</body>
</html>