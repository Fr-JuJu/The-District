<?php
    require_once('header.php')
?>
      <img src="./assets/img/images_the_district/bg1.jpeg" width="100%" height="350px">
           <br><br><br><br>
          <div class="container">
            <div class="row">
      <form class="row g-3 needs-validation" action="script contact.php" method="post" novalidate>
        <div class="col-4 col-md-6 ">
          <label for="validationCustom01" class="form-label">Nom</label>
          <input type="text" name="nom"class="form-control" id="validationCustom01" id="NomJS" required>
          <div class="invalid-feedback">
            Ce Champ est obligatoire.
          </div>
        </div>
        <div class="col-4 col-md-6 ">
          <label for="validationCustom02" class="form-label">Prénom</label>
          <input type="text" name="prenom" class="form-control" id="validationCustom02" id="PrenomJS" required>
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
            <input class="form-check-input" type="checkbox" id="invalidCheck" required>
            <label class="form-check-label" for="invalidCheck">
                Accepter les termes et conditions
            </label>
            <div class="invalid-feedback">
                Ce Champ est obligatoire.
            </div>
          </div>
        </div>
        <div class="terme col-12 d-flex justify-content-end"><a href="./condition.php"><h2>*Terme et condition</h2></a></div>
        <div class="col-12 d-flex justify-content-end">
          <button class="btn btn-dark" type="submit">Envoyer</button>
        </div>
      </form>
    </div>
    </div>
    <br>
    <?php
    require_once('footer.php')
    ?>
      <script src="./assets/js/Form.js"></script>
        <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous"></script>
</body>
</html>