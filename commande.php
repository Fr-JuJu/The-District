<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
   
    <link rel="shortcut icon" type="image/png" href="./assets/img/images_the_district/the_district_brand/favicon.png">

    <title>The District</title>
</head>
<body>
<?php
    require_once('header.php')
?>

<br>

<?php
  $stmt=$dbh->prepare("SELECT plat.libelle AS libelle, plat.image, plat.prix, plat.description, categorie.libelle AS nomcat, plat.id, id_categorie 
                            FROM plat LEFT JOIN categorie ON plat.id_categorie=categorie.id 
                                WHERE plat.id= :id ORDER BY categorie.libelle DESC");
  try{
    $stmt->execute(array(':id' => $_GET['bouton']));
  
  } catch (PDOException $e){
    echo 'Erreur lors de l\'exécution de la requête : '. $e->getMessage();
  }

$result=$stmt->fetchAll();
$stock=$_GET['bouton']; 

?>
<div class="container ">
  <div class="row justify-content-center">
<?php
// affichage des catégories dans une card bootstrap pour les 6 premières catégories
  $i=0;
        foreach($result as $row){
            echo '<div class="card mb-3 col-sm-12 col-lg-3" style="max-width: 600px;">
                  <div class="row g-0">
                  <div class="imgg col-md-4">
               <img src="assets/img/food/'.$row['image'].'"class="img-fluid rounded-start" alt="'.$row['libelle'].'" style="height:50%" width="100%">
                 </div>
                   <div class="col-md-8">
                <div class="card-body">
                 <h5 class="card-title fs-2 text fw-semibold text-black text-decoration-underline">'.$row['libelle'].'</h5>
                  <p class="card-text fs-4 text text-black text-decoration-none"> '.$row['description'].'</p>
                   <p class="card-text fs-3 fw-semibold text-black">Prix :<p class="fs-3 fw-semibold text-black"> '.$row['prix'].' €</p></p>
                   <div class="bbtn justify-content-end">
                <p class="text-black fs-2">Quantité :</p>
              <input class="input_style" type="number" tabindex="5" min="1" max="23" required>
            </div>
                    
                 </div>
    </div>
              </div>
              </div>';
              $i++;
              if($i==1){
                break;
        }
      }

?>
</div>
    </div>

      <!--<div class="container">
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
    </div> -->
      
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
        <input type="number" id="numberInput" oninput="limitCharacterLength(this, 10)" maxlength="10" step="any" name="tel" class="form-control" maxlength="10" id="validationCustom03" id="telephoneJS" required>
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
      <style>
  body{
    margin: 0 0 0 0;
    background-color:#C7814A ;
    font-family: cursive;
    font-size:25px;
}

    .card{
      border:solid 20px #76000F ;
      background-color: #76000F;
        border-radius: 16px;
        margin: 0 auto;
        width: 650px;
        height: 560px;
        box-shadow: 0px 3px 5px -1px rgba(0, 0, 0, 0.2);
        overflow: hidden;
        background-size: cover;
        filter: drop-shadow(15px 20px 4px #6d4628);
      font-size: 25px;
    }
  </style>

    </body>
</html>

