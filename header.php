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
            <li class="offcanvas-item col-1 ">
              <a class="nav-link active" aria-current="page" href="/index.php">Accueil</a>
            </li>
            <li class="nav-item col-3 ">
              <a class="nav-link " href="./categorie.php">Toutes les Catégories</a>
            </li>
            <li class="nav-item col-3 ">
              <a class="nav-link " href="./plats.php">Plats</a>
            </li>
            <li class="nav-item dropdown col-3">
              <a class="nav-link dropdown-toggle " href="#" role="button" data-bs-toggle="dropdown" aria-expanded="false">
                Catégorie
              </a>
              <ul class="dropdown-menu bg-dark navbar-dark">
                <li><a class="dropdown-item" href="./asi.php">Asian Food</a></li>
                <li><a class="dropdown-item" href="#">Burger</a></li>
                <li><a class="dropdown-item" href="#">Pâte</a></li>
                <li><a class="dropdown-item" href="#">Pizza</a></li>
                <li><a class="dropdown-item" href="#">Salade</a></li>
                <li><a class="dropdown-item" href="#">Wrap</a></li>
                <li><a class="dropdown-item" href="#">Sandwich</a></li>
                <li><a class="dropdown-item" href="#">Veggie</a></li>
                <li><a class="dropdown-item" href="#">Apéritif</a></li>
                <li><a class="dropdown-item" href="#">Boisson</a></li>
                <li><a class="dropdown-item" href="#">Fromage</a></li>
                <li><a class="dropdown-item" href="#">Dessert</a></li>
              </ul>
            </li>
            <li class="nav-item col-2">
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