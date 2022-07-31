<!DOCTYPE html>

<html
  lang="en"
  class="light-style layout-menu-fixed"
  dir="ltr"
  data-theme="theme-default"
  data-assets-path="../assets/"
  data-template="vertical-menu-template-free"
>
<?php
    require "includes/head.php";
?>

  <body>
    <!-- Layout wrapper -->
    <div class="layout-wrapper layout-content-navbar">
      <div class="layout-container">
        <!-- Menu -->
        <?php
          require "includes/menu.php"
        ?>
        
        <!-- / Menu -->

        <!-- Layout container -->
        <div class="layout-page">
          <!-- Navbar -->

          <?php
          require "includes/header.php";
        ?>
         

          <!-- / Navbar -->

          <!-- Content wrapper -->
          <div class="content-wrapper">
            <!-- Content -->

            <div class="container-xxl flex-grow-1 container-p-y">
              <h4 class="fw-bold py-3 mb-4"><span class="text-muted fw-light">Etudiant/</span> Ajouter un etudiant</h4>

              <!-- Basic Layout -->
              <div class="row">
                <div class="col-xl">
                  <div class="card mb-4">
                    <div class="card-header d-flex justify-content-between align-items-center">
                      <h5 class="mb-0"></h5>
                      <small class="text-muted float-end">Renseignements sur l'etudiant</small>
                    </div>
                    <div class="card-body">
                      <form>
                        <div class="mb-3">
                          <label class="form-label" for="basic-default-fullname">Nom complet</label>
                          <input type="text" class="form-control" id="basic-default-fullname" placeholder="ex: eliezer mubalama kasongo" />
                        </div>
                        <div class="mb-3">
                          <label class="form-label" for="basic-default-fullname">Faculté</label>
                          <input type="text" class="form-control" id="basic-default-fullname" placeholder="ex: faculté des sciences et techologies appliquées" />
                        </div>
                        <div class="mb-3">
                          <label class="form-label" for="basic-default-fullname">matricule</label>
                          <input type="text" class="form-control" id="basic-default-fullname" placeholder="ex: 3998" />
                        </div>
                        
                        </div>
                 
                        </div>
                        <button type="submit" class="btn btn-primary container" style="padding-top:12px;padding-bottom:12px">Enregistrer</button>
                      </form>
                    </div>
                  </div>
                </div>
 
            <!-- / Content -->

            <!-- Footer -->
            <?php
          require "includes/footer.php"
        ?>
            <!-- / Footer -->

            <div class="content-backdrop fade"></div>
          </div>
          <!-- Content wrapper -->
        </div>
        <!-- / Layout page -->
      </div>

      <!-- Overlay -->
      <div class="layout-overlay layout-menu-toggle"></div>
    </div>
    <!-- / Layout wrapper -->



    <!-- Core JS -->
    <?php
          require "includes/js.php"
        ?>



  </body>
</html>
