<!DOCTYPE html>
<html lang="en">
<link rel="stylesheet" href="style.css">
<?php require('component/head.php') ?>

<body>
    <?php require('component/navbar.php') ?>
<!-- Section: Contact v.1 -->
<section class="my-5">

  <!-- Section heading -->
  <h2 class="h1-responsive font-weight-bold text-center my-5">Contactez-nous</h2>
  <!-- Section description -->
  <p class="text-center w-responsive mx-auto pb-5">Lorem ipsum dolor sit amet, consectetur adipisicing elit.
    Fugit, error amet numquam iure provident voluptate esse quasi, veritatis totam voluptas nostrum quisquam
    eum porro a pariatur veniam.</p>

  <!-- Grid row -->
  <div class="row">

    <!-- Grid column -->
    <div class="col-lg-5 mb-lg-0 mb-4">

      <!-- Form with header -->
      <div class="card">
        <div class="card-body">
          <!-- Header -->
          <div class="form-header blue accent-1">
            <h3 class="mt-2"><i class="fas fa-envelope"></i> Ecrivez nous:</h3>
          </div>
          <p class="dark-grey-text">Faites nous part de vos meilleur avis.</p>
          <!-- Body -->
          <div class="md-form">
          <label for="form-name">Nom :</label>
            <i class="fas fa-user prefix grey-text"></i>
            <input type="text" id="form-name" class="form-control">
          </div>

          <div class="md-form">
          <label for="form-email">Email :</label>
            <i class="fas fa-envelope prefix grey-text"></i>
            <input type="text" id="form-email" class="form-control">
          </div>

          <div class="md-form">
          <label for="form-Subject">Objet :</label>
            <i class="fas fa-tag prefix grey-text"></i>
            <input type="text" id="form-Subject" class="form-control">
          </div>

          <div class="md-form">
          <label for="form-text">Message :</label>
            <i class="fas fa-pencil-alt prefix grey-text"></i>
            <textarea id="form-text" class="form-control md-textarea" rows="3"></textarea>
          </div>
          <div class="text-center">
            <button class="btn btn-success">Envoyer</button>
          </div>
        </div>
      </div>
      <!-- Form with header -->

    </div>
    <!-- Grid column -->

    <!-- Grid column -->
    <div class="col-lg-7">

      <!--Google map-->
      <div id="map-container-section" class="z-depth-1-half map-container-section mb-4" style="height: 400px">
      <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d2545.657595487164!2d3.4970444156942753!3d50.35429147946217!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x47c2ec4b04516047%3A0x8bfc13943b7dc67b!2sValarep!5e0!3m2!1sfr!2sfr!4v1603204852186!5m2!1sfr!2sfr" width="600" height="450" frameborder="0" style="border:0;" allowfullscreen="" aria-hidden="false" tabindex="0"></iframe>
      </div>
      <!-- Buttons-->
      <div class="row text-center">
        <div class="col-md-4">
          <a class="btn-floating blue accent-1">
            <i class="fas fa-map-marker-alt"></i>
          </a>
          <p>Valenciennes, 59300</p>
          <p class="mb-md-0">France</p>
        </div>
        <div class="col-md-4">
          <a class="btn-floating blue accent-1">
            <i class="fas fa-phone"></i>
          </a>
          <p>06 07 08 09 10</p>
          <p class="mb-md-0">Lun - Vend, 8:00-17:00</p>
        </div>
        <div class="col-md-4">
          <a class="btn-floating blue accent-1">
            <i class="fas fa-envelope"></i>
          </a>
          <p>valarep@valarep.fr</p>
          <p class="mb-0">bailey.ouadjed12@gmail.com</p>
        </div>
      </div>

    </div>
    <!-- Grid column -->

  </div>
  <!-- Grid row -->

</section>
<!-- Section: Contact -->
</body>
<?php require('component/script.php') ?>
</html>