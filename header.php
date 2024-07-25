<?php
session_start();
$servername = "localhost";
$username = "admin";
$password = "Afpa1234";
$dbname = "the_district";

try {
  $dbh = new PDO("mysql:host=$servername;dbname=$dbname", $username, $password);
  // configurer le mode d'erreur PDO pour générer des exceptions
  $dbh->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
} catch (PDOException $e) {
  echo "Erreur de connexion à la base de données: " . $e->getMessage();
}
?> 
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="shortcut icon" type="image/png" href="./assets/img/images_the_district/the_district_brand/favicon.png">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
    <link rel="stylesheet" href="assets/css/accueil.css">
</head>
<body>

<nav class="navbar navbar-expand-lg font-light bg-black navbar-dark">
      <div class="container-fluid bg-black navbar-dark">
        <a class="navbar-brand" href="#"><img src="./assets/img/images_the_district/logo-removebg-preview.png" width="30%"></a>
        <div class="boubou">
        <button class="navbar-toggler " type="button" data-bs-toggle="offcanvas" data-bs-target="#offcanvasNavbar" aria-controls="offcanvasNavbar" aria-label="Toggle navigation">
          <span class="navbar-toggler-icon"></span>
        </button>
      </div>
        <div class="offcanvas offcanvas-end bg-dark font-light" tabindex="-1" id="offcanvasNavbar" aria-labelledby="offcanvasNavbarLabel">
            <div class="offcanvas-header font-light ">
              <h5 class="offcanvas-title" id="offcanvasNavbarLabel">The District</h5>
              <button type="button" class="btn-close" data-bs-dismiss="offcanvas" aria-label="Close"></button>
            </div>
            <div class="container-fluid naav">
              <div class="row ">
            <div class="offcanvas-body ">
            <li class="offcanvas-item col-3 ">
              <a class="nav-link active" aria-current="page" href="/index.php">Accueil</a>
            </li>
            <li class="nav-item col-3 ">
              <a class="nav-link " href="./categorie.php">Toutes les Catégories</a>
            </li>
            <li class="nav-item col-3 ">
              <a class="nav-link " href="./plats.php">Plats</a>
            </li>
            <li class="nav-item col-3">
              <a class="nav-link " href="form.php">Contact</a> 
            </li>
          </ul>
            </div>
        </div>
      </div>
        </div>
        </div>
      </div>
    </nav>

    <style> 

.offcanvas-body{
color:#BCA693;
font-size: 30px;
font-family: cursive;
}

.dropdown-menu{
  font-size: 30px;
  color:#BCA693;
}

.dropdown-item{
  color:aliceblue
}
.btn-close{
  background-color: aliceblue;
}

    </style>

<?php
  switch ($_SERVER['REQUEST_URI']) { // Il s'agit d'une variable superglobale PHP qui renvoie l'URL actuelle de la requête.
    case '/index.php':               // L'instruction switch est utilisée pour comparer l'URL actuelle avec une liste d'URL prédéfinies.
      echo '<title>Accueil</title>';
      break;                         // L'instruction break est utilisée pour quitter le bloc switch une fois qu'une correspondance est trouvée.
    case '/plats.php':        // Pour chaque 'case', si l'URL actuelle correspond à l'URL spécifiée, le code à l'intérieur de ce 'case' sera exécuté. Dans ce cas, il définit le titre de la page Web à l'aide de l'instruction echo.
      echo '<title>Plats</title>';
      break;
    case '/form.php':
      echo '<title>Contact</title>';
      break;
    case '/categorie.php':
      echo '<title>Catégories</title>';
      break;
    case '/asi.php':
      echo '<title>Plats par catégories</title>';
      break;
    case '/commande.php':
      echo '<title>Commande</title>';
      break;
    case '/condition.php';
      echo '<title>Terme et condition</title>';
      break;
    case '/mentions.php';
      echo '<title>Mentions légales</title>';
      break;
    case '/asi.php?catplat=4':
      echo '<title>Pizzas</title>';
      break;
    case '/asi.php?catplat=5':
      echo '<title>Burgers</title>';
      break;
    case '/asi.php?catplat=9':
      echo '<title>Wraps</title>';
      break;
    case '/asi.php?catplat=10':
      echo '<title>Pasta</title>';
      break;
    case '/asi.php?catplat=11':
      echo '<title>Sandwiches</title>';
      break;
    case '/asi.php?catplat=12':
      echo '<title>Asian Food</title>';
      break;
      case '/asi.php?catplat=13':
        echo '<title>Salades</title>';
        break;
        case '/asi.php?catplat=14':
          echo '<title>Veggie</title>';
          break;
          case '/asi.php?catplat=15':
            echo '<title>Apéritif</title>';
            break;
            case '/asi.php?catplat=16':
              echo '<title>Boisson</title>';
              break;
              case '/asi.php?catplat=17':
                echo '<title>Dessert</title>';
                break;
                case '/asi.php?catplat=18':
                  echo '<title>Fromage</title>';
                  break;
      case '/commande.php?bouton=4':
        echo '<title>Commande</title>';
        break;
        case '/commande.php?bouton=5':
          echo '<title>Commande</title>';
          break;
          case '/commande.php?bouton=6':
            echo '<title>Commande</title>';
            break;
            case '/commande.php?bouton=7':
              echo '<title>Commande</title>';
              break;
              case '/commande.php?bouton=8':
                echo '<title>Commande</title>';
                break;
                case '/commande.php?bouton=9':
                  echo '<title>Commande</title>';
                  break;
                  case '/commande.php?bouton=10':
                    echo '<title>Commande</title>';
                    break;
                    case '/commande.php?bouton=11':
                      echo '<title>Commande</title>';
                      break;
                      case '/commande.php?bouton=12':
                        echo '<title>Commande</title>';
                        break;
                        case '/commande.php?bouton=13':
                          echo '<title>Commande</title>';
                          break;
                          case '/commande.php?bouton=14':
                            echo '<title>Commande</title>';
                            break;
                            case '/commande.php?bouton=15':
                              echo '<title>Commande</title>';
                              break;
                              case '/commande.php?bouton=16':
                                echo '<title>Commande</title>';
                                break;
                                case '/commande.php?bouton=17':
                                  echo '<title>Commande</title>';
                                  break;
                                  case '/commande.php?bouton=18':
                                    echo '<title>Commande</title>';
                                    break;
                                    case '/commande.php?bouton=19':
                                      echo '<title>Commande</title>';
                                      break;
                                      case '/commande.php?bouton=20':
                                        echo '<title>Commande</title>';
                                        break;
                                        case '/commande.php?bouton=21':
                                          echo '<title>Commande</title>';
                                          break;
                                          case '/commande.php?bouton=22':
                                            echo '<title>Commande</title>';
                                            break;
                                            case '/commande.php?bouton=23':
                                              echo '<title>Commande</title>';
                                              break;
                                              case '/commande.php?bouton=24':
                                                echo '<title>Commande</title>';
                                                break;
                                                case '/commande.php?bouton=25':
                                                  echo '<title>Commande</title>';
                                                  break;
                                                  case '/commande.php?bouton=26':
                                                    echo '<title>Commande</title>';
                                                    break;
                                                    case '/commande.php?bouton=27':
                                                      echo '<title>Commande</title>';
                                                      break;
                                                      case '/commande.php?bouton=28':
                                                        echo '<title>Commande</title>';
                                                        break;
                                                        case '/commande.php?bouton=29':
                                                          echo '<title>Commande</title>';
                                                          break;
                                                          case '/commande.php?bouton=30':
                                                            echo '<title>Commande</title>';
                                                            break;
                                                            case '/commande.php?bouton=31':
                                                              echo '<title>Commande</title>';
                                                              break;
                                                              case '/commande.php?bouton=32':
                                                                echo '<title>Commande</title>';
                                                                break;
                                                                case '/commande.php?bouton=33':
                                                                  echo '<title>Commande</title>';
                                                                  break;
                                                                  case '/commande.php?bouton=34':
                                                                    echo '<title>Commande</title>';
                                                                    break;
                                                                    case '/commande.php?bouton=35':
                                                                      echo '<title>Commande</title>';
                                                                      break;
                                                                      case '/commande.php?bouton=36':
                                                                        echo '<title>Commande</title>';
                                                                        break;
                                                                        case '/commande.php?bouton=37':
                                                                          echo '<title>Commande</title>';
                                                                          break;
                                                                          case '/commande.php?bouton=38':
                                                                            echo '<title>Commande</title>';
                                                                            break;
                                                                            case '/commande.php?bouton=39':
                                                                              echo '<title>Commande</title>';
                                                                              break;

        


    default:                        // Si l'URL actuelle ne correspond à aucune des URL spécifiées, le code du bloc par défaut sera exécuté, ce qui définit le titre sur "NoPage"
      echo '<title>NoPage</title>';
  }
  ?>