






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