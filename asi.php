<?php
    require_once('header.php')
?>
      <img src="./assets/img/images_the_district/bg1.jpeg" width="100%" height="350px">
    
      <?php
    $stmt=$dbh->prepare("SELECT plat.libelle AS nomplat, plat.image, plat.prix, plat.description, categorie.libelle AS nomcat, plat.id, id_categorie FROM plat LEFT JOIN categorie on plat.id_categorie=categorie.id WHERE id_categorie= :id ORDER BY categorie.libelle DESC");
try{
  // exécute de la requête SQL
  $stmt->execute(array(':id' => $_GET['catplat']));
  /*$stmt->execute(array($_GET['catplat']));*/
} catch (PDOException $e){
  // affiche un message d'erreur si la requête échoue
  echo 'Erreur lors de l\'exécution de la requête : '. $e->getMessage();
}

$result=$stmt->fetchAll();
$stock=$_GET['catplat'];
?>

<div class="container mt-3">
  <div class="row justify-content-center">

<?php
  $stmtCat = $dbh->prepare("SELECT libelle FROM categorie WHERE id = :id");
  $stmtCat->execute(array(':id' => $_GET['catplat']));
  $categoryName = $stmtCat->fetchColumn();
?>

<div class="container">
    <div class="row justify-content-center">
<div class="col-6 col-lg-1 mb-5" id="titre">
<p class="text-center fs-1 fw-semibold text-decoration-underline"><?php echo $categoryName; ?></p>
</div>
</div>
  </div>

<?php
// affichage des catégories dans une card bootstrap pour les 6 premières catégories
  $i=0;
        foreach($result as $row){
            echo '<div class="card mb-3 col-sm-12 col-lg-3" style="max-width: 650px;">
                  <div class="row g-0">
                  <div class="imgg col-md-4">
               <img src="assets/img/food/'.$row['image'].'"class="img-fluid rounded-start" alt="'.$row['libelle'].'" style="height:50%" width="100%">
                 </div>
                   <div class="col-md-8">
                <div class="card-body">
                 <h5 class="card-title fs-2 text fw-semibold text-black text-decoration-underline">'.$row['libelle'].'</h5>
                  <p class="card-text fs-4 text text-black text-decoration-none"> '.$row['description'].'</p>
                   <p class="card-text fs-3 fw-semibold text-black">Prix :<p class="fs-3 fw-semibold text-black"> '.$row['prix'].' €</p></p>
                      <form action="commande.php" methode="GET">
                      <button type="submit" name="bouton" class="btn js-4" value="'.$row['id'].'" >Commander </button>
                      </form>
                
              </a>
                 </div>
    </div>
              </div>
              </div>';
              $i++;
              if($i==8){
                break;
        }
      }

?>
        <br>
        <br>
        
        <?php
    require_once('footer.php')
?>
      <script src="./assets/js/button.js"></script>
        <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous"></script>
</body>
</html>