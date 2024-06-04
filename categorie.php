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
      <img src="./assets/img/images_the_district/bg2.jpeg" width="100%">
            <div class="page">
        <div class="cat1">
            <div class='carte1'>
                <div class='info'>
                  <a href="./asi.html"><h1 class='titre'>Asian Food</h1></a>
                  <a href="./asi.html"><p class='description'>The District vous propose une large gamme de sushi, plateau individuel ou à partager ! </p></a>
                </div>
              </div>    
        </div>
        <div class="cat2">
            
            <div class='carte2'>
                <div class='info'>
                  <a href="./"><h1 class='titre'>Nos Burger</h1> </a>
                  <a href="./"><p class='description'>Goûtez à nos bons burgers The District. Disponible à toutes les tailles et à toutes les faim</p></a>
                </div>
              </div>  

        </div>
        <div class="cat3">
            <div class='carte3'>
                <div class='info'>
                  <a href="./"><h1 class='titre'>Nos Pâtes</h1></a>
                  <a href="./"><p class='description'>Venues d'italie les pâtes de chez The District vont être bonne et al dente ! </p></a>
                </div>
              </div>      
        </div>
        <div class="cat4">
            <div class='carte4'>
                <div class='info'>
                  <a href="./"><h1 class='titre'>Nos Pizza</h1></a>
                  <a href="./"><p class='description'>Nous vos proposont des pizzas uniques seulement chez The District ! </p></a>
                </div>
              </div>      
        </div>
        <div class="cat5">
            <div class='carte5'>
                <div class='info'>
                  <a href="./"><h1 class='titre'>Nos Salade</h1></a>
                  <a href="./"><p class='description'>Pour ceux qui font attention à leur ligne ou pour une bonne entrée essayer les salades bien garnies de chez The District ! </p></a>
                </div>
              </div>      
        </div>
        <div class="cat6">
            <div class='carte6'>
                   <div class='info'>
                  <a href="./"><h1 class='titre'>Nos Wrap</h1></a>
                  <a href="./"><p class='description'>Nouveaux! Les wraps font leurs rentrés sur The District ! </p></a>
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
        </div>
        <br>
        <?php
    require_once('footer.php')
?>
      <script src="./assets/js/button.js"></script>
        <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous"></script>
</body>
</html>