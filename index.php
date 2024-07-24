<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
    <link rel="stylesheet" href="assets/css/accueil.css">
    <link rel="shortcut icon" type="image/png" href="./assets/img/images_the_district/the_district_brand/favicon.png">

    <title>The District</title>
</head>
<body>

<?php
    require_once('header.php')
?>
   <div class="container-fluid vvd g-0">
            <nav class="navbar">        
            <div class="row ">
            <form class="d-flex" role="search">
              <input class="form-control me-2 col-2" type="search" id="recherche" placeholder="Rechercher" aria-label="Rechercher">
            </form>
          </div>
        
        </nav>

          <div class="container-fluid">
            <div class="row g-0">
          <video src="./assets/img/VideoAcc.mp4" loop autoplay muted alt="video_pizza" title="Vidéo" class="object-fit-fill" id="imga">
          </div>
        </video>
      </div>
              
          </div>
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

            <div class="page">
        
        <div class="para">


        </div>
        <div class="plat">
        <div class="container">
          <div class="row">
        <?php
            // Préparation de la requête SQL pour les plats les plus vendus
         $stmt=$dbh->prepare("SELECT p.id,p.id_categorie,c.id_plat,SUM(quantite) as quantite_vendue,SUM(quantite)*prix as rentabilite,p.libelle,p.description,p.prix,p.image FROM commande c LEFT JOIN plat p ON c.id_plat=p.id WHERE c.etat!='Annulée' GROUP BY c.id_plat ORDER BY rentabilite DESC;");
          
          try{
            // Exécution de la requête SQL du dessus
            $stmt->execute();            
          } catch (PDOException $e){
            // Affichage d'un message d'erreur si la requête échoue
            echo 'Erreur lors de l\'exécution de la requête : '. $e->getMessage();
          }

        // Récupération des résultats de la requête
        $result=$stmt->fetchAll();
        ?>
        
        <div class="platimg">
          <div class="row">
            <p class=" libelleplat fs-1 text-center fw-bolder text-decoration-underline text-black">Plat les plus vendus </p>
       <?php
       $i=0;
        foreach($result as $row){
          echo '<div class="col-sm-12 col-lg-4">
              <a href="commande.php">
                <img src="assets/img/food/'.$row['image'].'"class="plat" alt="'.$row['libelle'].'" style="height:80%">
              </a>
              </div>';
              $i++;
              if($i==3){
                break;
              }
        }
        ?>
        </div>
        </div>
        </div>
        </div>
      <div class="ffoter">
        <div class="div1">
        </div>
      </div>
      </div>
      </div>
      <div class="fleche"> 
      <a href="#"><img src="assets/img/flèche1.png" class="position-fixed bottom-0 end-0" width="8%"></a> </div>
<?php
    require_once('footer.php')
?>

</div>
</div>
        <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous"></script>
</body>
</html>





<!--
   <div class="cat1">
          <a href="./asi.html"><p11>v Asian Food v</p11></a>
            <div class='carte1'>
                <div class='info'>
                  <a href="./asi.php"><h1 class='titre'>Asian Food</h1></a>
                  <a href="./asi.php"><p class='description'></p></a>
                </div>
              </div>    
        </div>
<div class="cat2">
        <a href="#"><p11>v Nos Burger v</p11></a>
            <div class='carte2'>
                <div class='info'>
                  <a href="./"><h1 class='titre'>Nos Burger</h1> </a>
                  <a href="./"><p class='description'></p></a>
                </div>
              </div>  

        </div>
        <div class="cat3">
        <a href="#"><p11>v Nos Pates v</p11></a>
            <div class='carte3'>
                <div class='info'>
                  <a href="./"><h1 class='titre'>Nos Pâtes</h1></a>
                  <a href="./"><p class='description'></p></a>
                </div>
              </div>      
        </div>
        <div class="cat4">
        <a href="#"><p11>v Nos Pizzas v</p11></a>
            <div class='carte4'>
              
                <div class='info'>
                  <a href="./"><h1 class='titre'>Nos Pizza</h1></a>
                  <a href="./"><p class='description'></p></a>
                </div>
              </div>      
        </div>
        <div class="cat5">
        <a href="#"><p11>v Nos salade v</p11></a>
            <div class='carte5'>
                <div class='info'>
                  <a href="./"><h1 class='titre'>Nos Salade</h1></a>
                  <a href="./"><p class='description'></p></a>
                </div>
              </div>      
        </div>
        <div class="cat6">
        <a href="#"><p11>v nos Wrap v</p11></a>
            <div class='carte6'>
                   <div class='info'>
                  <a href="./"><h1 class='titre'>Nos Wrap</h1></a>
                  <a href="./"><p class='description'></p></a>
                </div>
              </div>      
        </div> -->