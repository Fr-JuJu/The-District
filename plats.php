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

      <img src="./assets/img/images_the_district/bg1.jpeg" width="100%" height="350px">
      <?php 
      require_once('carteplat.php')
      ?>
        <br>
        <div class="container-fluid">
            <div class="row justify-content-between">
            <button type="button" class="btn btn-dark  col-3 mt-5 p-2 rounded-pill" onclick="precedent()">Précédent</button>
            <button type="button" class="btn btn-dark col-3 mt-5 p-2 rounded-pill" onclick="suivant()">Suivant</button>
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