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
      <img src="./assets/img/images_the_district/bg2.jpeg" height="380px" width="100%">
            <div class="page">
            <?php
// récupère toutes les données de catégorie
$stmt=$dbh->prepare("SELECT * FROM categorie WHERE active='Yes'");

try{
  // exécute de la requête SQL
  $stmt->execute();
} catch (PDOException $e){
  // affiche un message d'erreur si la requête échoue
  echo 'Erreur lors de l\'exécution de la requête : '. $e->getMessage();
}

// récupération des résultats de la requête
$result=$stmt->fetchAll();
?>
 <div class="container">
  <div class="row">
          <?php
// affichage des catégories dans une card bootstrap pour les 6 premières catégories
  $i=0;
        foreach($result as $row){
            echo '<div class="col-sm-12 col-lg-4">
              <a href="categorie.php"><p class="libellecard text-center"> '.$row['libelle'].'</p>
                <img src="assets/img/images_the_district/category/'.$row['image'].'"class="carte1" alt="'.$row['libelle'].'" style="height:80%">
                
              </a>
              </div>';
              $i++;
              if($i==6){
                break;
        }
      }

?>
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
        </div>
  
        <br>
        <?php
    require_once('footer.php')
?>
      <script src="./assets/js/button.js"></script>
        <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous"></script>
</body>
</html>