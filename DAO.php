<!---------------------------------------------------------------PAGE INDEX--------------------------------------------->
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

<!---------------------------------------------------------------PAGE CATEGORIE--------------------------------------------->
<?php
function get_categories(){
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
    
}
?>


<?php
// affichage des catégories dans une card bootstrap pour les 6 premières catégories
  $i=0;
        foreach($result as $row){
            echo '<div class="col-sm-12 col-lg-4">
              <a href="asi.php?catplat='.$row['id'].'"><p class="libellecat text-center"> '.$row['libelle'].'</p>
                <img src="assets/img/images_the_district/category/'.$row['image'].'"class="cartecat" alt="'.$row['libelle'].'" style="height:80%" width="100%">
                
              </a>
              </div>';
              $i++;
              if($i==12){
                break;
        }
      }
?>

<!---------------------------------------------------------------PAGE PLATS--------------------------------------------->

<?php
// récupère toutes les données de catégorie
$stmt=$dbh->prepare("SELECT * FROM plat WHERE active='Yes'");

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
                      <form action="commande.php" methode="GET">
                      <button type="submit" name="bouton" class="btn js-4" value="'.$row['id'].'" >Commander </button>
                      </form>

                
              </a>
                 </div>
    </div>
              </div>
              </div>';
              $i++;
              if($i==35){
                break;
        }
      }

?>

<!---------------------------------------------------------------PAGE ASI--------------------------------------------->

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

<!---------------------------------------------------------------PAGE COMMANDE--------------------------------------------->

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
              <input class="input_style" type="number" oninput="limitCharacterLength(this, 2)" maxlength="2" tabindex="5" min="1" max="23" value="1"required>
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
